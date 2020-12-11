<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Barang;
use App\Models\BarangImage;
use App\Traits\database\QueryBuilder;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\StringValidator;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\database\Paginator;

/** 
 * @group v1 - Barang Image
 * 
 * ### API for Manage Barang Image.
 * 
 * This API is used to manage barang image. 
 * A barang can have multiple images. 
 */
class BarangImageController extends Controller
{
    /**
     * Get List Barnag Image
     * 
     * ### Image Barang parameter query supported:
     * * id
     * * barang_id
     * 
     * ### orderBy query supported fields:
     * * All field of barang image detail
     *       
     * <aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>
     * 
     * @queryParam id integer Apply filter with id. No-example
     * @queryParam barang_id integer Apply filter with barang_id. No-example
     * @queryParam orderBy string Apply ordering based on specific field. 
     *              Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).
     *              No-example
     * 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function index(Request $request)
    {
        $query = BarangImage::select('*');
        $fields = [
            'id',
            'barang_id'
        ];
        // limit query by specific field. Example: ?id=1
        $query = QueryBuilder::whereFields($request, $query, $fields);

        // order by desc or asc in field specified: use "?orderBy=-id" to order by id descending, and "?orderBy=id" to order by ascending.
        $query = QueryBuilder::orderBy($request, $query);

        $barangImages = Paginator::paginate($request, $query);
        return Resource::collection($barangImages);
    }


    /**
     * Add Barang Image.
     * 
     * Barang image will be uploaded in firebase storage/google cloud storage. 
     * After that, the url will be saved in database.
     * 
     * @bodyParam nama string required Nama image. Example: Tas Besar
     * @bodyParam uri string required URI Base64 image. Example: base64string
     * @bodyParam barang_id integer required id Barang that owned this image. Example 3
     * 
     * @response status=201 scenario="success" {
     *  "nama": "Tas Besar",
     *  "uri": "https://storage.googleapis.com/megabitlostnfound.appspot.com/barangs/image/6",
     *  "barang_id": 3,
     *  "id": 6
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "uri": [
     *          "The uri field is required."
     *      ],
     *      "barang_id": [
     *          "The barang id field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'uri' => 'required|string',
            'barang_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        if (StringValidator::isImageBase64($validatedData['uri']) == null) {
            return ValidationError::response(['uri' => 'You must use urlBase64 image format.']);
        }
        $uriBase64 = $validatedData['uri'];
        $validatedData['uri'] = "";
        $barang = Barang::findOrFail($validatedData['barang_id']);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $barangImage = BarangImage::create($validatedData);
        $uri = FirebaseStorage::imageUpload($uriBase64, 'barangs/image/' . $barangImage->id);
        $barangImage->update(['uri' => $uri]);
        return response()->json($barangImage, 201);
    }

    /**
     * Get Detail Barang Image.
     * 
     * Returns barang image details. 
     * 
     * @urlParam id integer required The id of barang image. Example: 6 
     * 
     * @response status=200 scenario="success" {
     *  "nama": "Tas Besar Updated",
     *  "uri": "https://storage.googleapis.com/megabitlostnfound.appspot.com/barangs/image/6",
     *  "barang_id": 3,
     *  "id": 6
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function show($id)
    {
        $barangImage = BarangImage::findOrFail($id);
        return response()->json($barangImage);
    }

    /**
     * Update Barang Image.
     * 
     * Update all of the field except id in barang image data. 
     * 
     * @urlParam id integer required The id of barang image. Example: 6 
     * 
     * @bodyParam nama string required Nama image. Example: Tas Besar Updated
     * @bodyParam uri string required URI Base64 image. Example: base64string
     * @bodyParam barang_id integer required id Barang that owned this image. Example 3
     * 
     * @response status=201 scenario="success" {
     *  "nama": "Tas Besar Updated",
     *  "uri": "https://storage.googleapis.com/megabitlostnfound.appspot.com/barangs/image/6",
     *  "barang_id": 3,
     *  "id": 6
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "uri": [
     *          "The uri field is required."
     *      ],
     *      "barang_id": [
     *          "The barang id field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     *  "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * }
     */
    public function update(Request $request, $id)
    {
        $barangImage = BarangImage::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barangImage->barang->user_id);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'uri' => 'required|string',
            'barang_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        if (StringValidator::isImageBase64($validatedData['uri']) == null) {
            return ValidationError::response(['uri' => 'You must use urlBase64 image format.']);
        }
        $uri = FirebaseStorage::imageUpload($validatedData['uri'], 'barangs/image/' . $barangImage->id);
        $validatedData['uri'] = $uri;
        $barangImage->update($validatedData);
        $responseData = $barangImage->toArray();
        unset($responseData['barang']); // dirty orm
        return response()->json($responseData, 201);
    }

    /**
     * Partial Update Barang Image.
     * 
     * Update some field of barang image data. 
     * 
     * @urlParam id integer required The id of barang image. Example: 6 
     * 
     * @bodyParam nama string Nama image. Example: Tas Besar Partial Update
     * @bodyParam uri string URI Base64 image. No-example
     * @bodyParam barang_id integer id Barang that owned this image.
     * 
     * @response status=201 scenario="success" {
     *  "nama": "Tas Besar Partial Update",
     *  "uri": "https://storage.googleapis.com/megabitlostnfound.appspot.com/barangs/image/6",
     *  "barang_id": 3,
     *  "id": 6
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "uri": [
     *          "The uri field is required."
     *      ],
     *      "barang_id": [
     *          "The barang id field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     *  "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * }
     */
    public function updatePartial(Request $request, $id)
    {
        $barangImage = BarangImage::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barangImage->barang->user_id);
        $validator = Validator::make($request->all(), [
            'nama' => 'string|max:255',
            'uri' => 'string',
            'barang_id' => 'numeric',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        if (array_key_exists("uri", $validatedData)) {
            if (StringValidator::isImageBase64($validatedData['uri']) == null) {
                return ValidationError::response(['uri' => 'You must use urlBase64 image format.']);
            }
            $uri = FirebaseStorage::imageUpload($validatedData['uri'], 'barangs/image/' . $barangImage->id);
            $validatedData['uri'] = $uri;
        }
        $barangImage->update($validatedData);
        $responseData = $barangImage->toArray();
        unset($responseData['barang']); // dirty orm
        return response()->json($responseData, 201);
    }

    /**
     * Delete Barang Image.
     *
     * Barang image will be deleted in database and in storage.
     * 
     * @urlParam id integer required The id of barang image. Example: 6
     * @response status=204 scenario="delete success" {
     *  "message": "Image barang deleted successfully"
     * } 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     *  "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="barang not found" {
     *  "message": "Not Found"
     * }
     */
    public function destroy(Request $request, $id)
    {
        $barangImage = BarangImage::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barangImage->barang->user_id);
        FirebaseStorage::imageDelete('barangs/image/' . $barangImage->id);
        $barangImage->delete();
        return response()->json(['message' => 'Image barang deleted successfully'], 204);
    }
}
