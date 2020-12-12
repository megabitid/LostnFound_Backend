<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Barang;
use App\Models\BarangStatus;
use App\Models\History;
use App\Traits\database\QueryBuilder;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\database\Paginator;
use Tymon\JWTAuth\Facades\JWTAuth;

/** 
 * @group v1 - Barang
 * 
 * ### API for Manage Barang.
 * 
 * This API is used to managing barang. 
 * Including barang hilang, ditemukan, didonasikan, diklaim; 
 * depending with its status.
 */
class BarangController extends Controller
{
    /**
     * Get List Barang.
     * 
     * ### Barang parameter query supported:
     * * id
     * * user_id
     * * stasiun_id
     * * status_id
     * * kategori_id
     * 
     * ### orderBy query supported fields:
     * * All field of barang detail
     * 
     * ### search query will search string inside these fields:
     * * nama_barang
     * * lokasi
     * * tanggl
     * * deskrpi
     * * warna
     * * merek
     *       
     * <aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>
     * 
     * @queryParam id integer Apply filter with id. No-example
     * @queryParam user_id integer Apply filter with user_id. No-example
     * @queryParam stasiun_id integer Apply filter with stasiun_id. No-example
     * @queryParam status_id integer Apply filter with status_id. No-example
     * @queryParam kategori_id integer Apply filter with kategori_id. No-example
     * @queryParam orderBy string Apply ordering based on specific field. 
     *              Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).
     *              Example: -id
     * @queryParam search string Apply filtering with string search. Example: 2020
     * 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function index(Request $request)
    {
        $query = Barang::select('*');
        $fields = [
            'id',
            'user_id',
            'stasiun_id',
            'status_id',
            'kategori_id'
        ];
        // limit query by specific field. Example: ?id=1
        $query = QueryBuilder::whereFields($request, $query, $fields);

        // order by desc or asc in field specified: use "?orderBy=-id" to order by id descending, and "?orderBy=id" to order by ascending.
        $query = QueryBuilder::orderBy($request, $query);

        // search text contains in this field.
        $searchFields = [
                'nama_barang',
                'lokasi',
                'tanggal',
                'deskripsi',
                'warna',
                'merek'
        ];
        $query = QueryBuilder::searchIn($request, $query, $searchFields);
        $query = $query->with('stasiun');
        $query = $query->with(array('barangimages'=>function($query){
            $query->first();
        }));


        // paginate
        $paginator = Paginator::paginate($request, $query);
        $excludeFields = [
            'stasiun_id',
            'deskripsi',
            'created_at',
            'updated_at',
        ];
        $barangs = Paginator::exclude($paginator, $excludeFields);
        return Resource::collection($barangs);
    }

    /**
     * Add Barang.
     * 
     * Add barang with their status and its related field.
     * 
     * @bodyParam nama_barang string required Nama barang. Example: Clair Rowe
     * @bodyParam lokasi string required Lokasi detail barang. Example: 67934 Juvenal Place\nJeffport, OR 75023-4991
     * @bodyParam deskripsi string required Deskripsi barang. Example: Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.
     * @bodyParam warna string required Warna barang. Example: Salmon
     * @bodyParam merek string required Merek barang. Example: Heaney-Hansen
     * @bodyParam user_id integer required id User yang terkait barang. Example: 5
     * @bodyParam status_id integer required id Status barang. Example: 4
     * @bodyParam stasiun_id integer required id Stasiun barang. Example: 4
     * @bodyParam kategori_id integer required id Kategori barang. Example: 3
     * 
     * @response status=201 scenario="success" {
     *  "id": 3,
     *  "nama_barang": "Clair Rowe",
     *  "tanggal": "2020-12-04",
     *  "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
     *  "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
     *  "warna": "Salmon",
     *  "merek": "Heaney-Hansen",
     *  "user_id": 5,
     *  "status_id": 4,
     *  "stasiun_id": 4,
     *  "kategori_id": 3,
     *  "created_at": "2020-12-10T15:25:46.000000Z",
     *  "updated_at": null
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *   "errors": {
     *       "nama_barang": [
     *           "The nama barang field is required."
     *       ],
     *       "lokasi": [
     *           "The lokasi field is required."
     *       ],
     *       "deskripsi": [
     *           "The deskripsi field is required."
     *       ],
     *       "warna": [
     *           "The warna field is required."
     *       ],
     *       "merek": [
     *           "The merek field is required."
     *       ],
     *       "user_id": [
     *           "The user id field is required."
     *       ],
     *       "stasiun_id": [
     *           "The stasiun id field is required."
     *       ],
     *       "status_id": [
     *           "The status id field is required."
     *       ],
     *       "kategori_id": [
     *           "The kategori id field is required."
     *       ]
     *   }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'required|string',
            'warna' => 'required|string',
            'merek' => 'required|string',
            'user_id' => 'required|numeric',
            'stasiun_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'kategori_id' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $validatedData['tanggal'] = Carbon::now()->format('Y-m-d');
        $barang = Barang::create($validatedData);
        $responseData = $barang->toArray();
        History::create([
            'user_id'   => $validatedData['user_id'],
            'barang_id' => $barang['id'],
            'status'    => $barang->status->nama
        ]);
        return response()->json($responseData, 201);
    }

    /**
     * Get Detail Barang.
     * 
     * @urlParam id integer required The id of barang. Example: 3
     * @response status=200 scenario="success" {
     *  "id": 3,
     *  "nama_barang": "Clair Rowe Updated Partially",
     *  "tanggal": "2020-12-04",
     *  "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
     *  "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
     *  "warna": "Salmon",
     *  "merek": "Heaney-Hansen",
     *  "user_id": 5,
     *  "status_id": 4,
     *  "created_at": null,
     *  "updated_at": "2020-12-10T15:28:18.000000Z",
     *  "stasiun": {
     *      "id": 4,
     *      "nama": "Lou Gutmann"
     *  },
     *  "kategori": {
     *      "id": 3,
     *      "nama": "Mr. Toby Fadel"
     *  },
     *  "barangimages": [
     *      {
     *        "id": 1,
     *        "nama": "Teresa Hettinger",
     *        "uri": "https://via.placeholder.com/640x480.png/00cc66?text=tenetur",
     *        "barang_id": 3
     *      }
     *  ]
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=404 scenario="barang not found" {
     *  "message": "Not Found"
     * }
     */
    public function show($id)
    {
        $barang = Barang::with(['stasiun','kategori','barangimages'])->findOrFail($id);
        $excludeFields = [
            'stasiun_id',
            'kategori_id',
        ];
        $barang = $barang->makeHidden($excludeFields);
        return response()->json($barang, 200);
    }

    /**
     * Update Barang.
     * 
     * Will update barang.
     * 
     * @bodyParam nama_barang string required Nama barang. Example: Clair Rowe Updated Partially
     * @bodyParam lokasi string required Lokasi detail barang. Example: 67934 Juvenal Place\nJeffport, OR 75023-4991
     * @bodyParam deskripsi string required Deskripsi barang. Example: Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.
     * @bodyParam warna string required Warna barang. Example: Salmon
     * @bodyParam merek string required Merek barang. Example: Heaney-Hansen
     * @bodyParam user_id integer required id User yang terkait barang. Example: 5
     * @bodyParam status_id integer required id Status barang. Example: 4
     * @bodyParam stasiun_id integer required id Stasiun barang. Example: 4
     * @bodyParam kategori_id integer required id Kategori barang. Example: 3
     * 
     * @urlParam id integer required The id of barang. Example: 3
     * @response status=201 scenario="update success" {
     *  "id": 3,
     *  "nama_barang": "Clair Rowe Updated",
     *  "tanggal": "2020-12-04",
     *  "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
     *  "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
     *  "warna": "Salmon",
     *  "merek": "Heaney-Hansen",
     *  "user_id": 5,
     *  "status_id": 4,
     *  "stasiun_id": 4,
     *  "kategori_id": 3,
     *  "created_at": null,
     *  "updated_at": "2020-12-10T15:25:46.000000Z"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *   "errors": {
     *       "nama_barang": [
     *           "The nama barang field is required."
     *       ],
     *       "lokasi": [
     *           "The lokasi field is required."
     *       ],
     *       "deskripsi": [
     *           "The deskripsi field is required."
     *       ],
     *       "warna": [
     *           "The warna field is required."
     *       ],
     *       "merek": [
     *           "The merek field is required."
     *       ],
     *       "user_id": [
     *           "The user id field is required."
     *       ],
     *       "stasiun_id": [
     *           "The stasiun id field is required."
     *       ],
     *       "status_id": [
     *           "The status id field is required."
     *       ],
     *       "kategori_id": [
     *           "The kategori id field is required."
     *       ]
     *   }
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
    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'required|string',
            'warna' => 'required|string',
            'merek' => 'required|string',
            'user_id' => 'required|numeric',
            'stasiun_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'kategori_id' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if ($validatedData["status_id"] != $barang->status_id){
            History::create([
                'user_id'   => JWTAuth::user()->id,
                'barang_id' => $barang['id'],
                'status'    => BarangStatus::findOrFail($validatedData['status_id'])->nama
            ]);
        }
        $barang->update($validatedData);
        $responseData = $barang->toArray();
        return response()->json($responseData, 201);
    }

    /**
     * Partial Update Barang.
     * 
     * Will update barang partially.
     * 
     * @bodyParam nama_barang string Nama barang. Example: Clair Rowe Updated Partially
     * @bodyParam lokasi string Lokasi detail barang. No-example
     * @bodyParam deskripsi string Deskripsi barang. No-example
     * @bodyParam warna string Warna barang. No-example
     * @bodyParam merek string Merek barang. No-example
     * @bodyParam user_id integer id User yang terkait barang. No-example
     * @bodyParam status_id integer id Status barang. No-example
     * @bodyParam stasiun_id integer id Stasiun barang. No-example
     * @bodyParam kategori_id integer id Kategori barang. No-example
     * 
     * @urlParam id integer required The id of barang. Example: 3
     * @response status=201 scenario="update success" {
     *  "id": 3,
     *  "nama_barang": "Clair Rowe Updated Partially",
     *  "tanggal": "2020-12-04",
     *  "lokasi": "67934 Juvenal Place\nJeffport, OR 75023-4991",
     *  "deskripsi": "Fuga molestiae minus ullam reprehenderit. Sunt accusantium nam qui esse qui optio. Dolorum qui qui aut ut voluptatum fuga et. Rem vitae similique eius sed.",
     *  "warna": "Salmon",
     *  "merek": "Heaney-Hansen",
     *  "user_id": 5,
     *  "status_id": 4,
     *  "stasiun_id": 4,
     *  "kategori_id": 3,
     *  "created_at": null,
     *  "updated_at": "2020-12-10T15:25:46.000000Z"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama_barang": [
     *          "The nama barang must be a string."
     *      ],
     *      "lokasi": [
     *          "The lokasi must be a string."
     *      ],
     *      "deskripsi": [
     *          "The deskripsi must be a string."
     *      ],
     *      "warna": [
     *          "The warna must be a string."
     *      ],
     *      "merek": [
     *          "The merek must be a string."
     *      ],
     *      "user_id": [
     *          "The user id must be a number."
     *      ],
     *      "stasiun_id": [
     *          "The stasiun id must be a number."
     *      ],
     *      "status_id": [
     *          "The status id must be a number."
     *      ],
     *      "kategori_id": [
     *          "The kategori id must be a number."
     *      ]
     *  }
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
    public function updatePartial(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'string|max:255',
            'lokasi' => 'string',
            'deskripsi' => 'string',
            'warna' => 'string',
            'merek' => 'string',
            'user_id' => 'numeric',
            'stasiun_id' => 'numeric',
            'status_id' => 'numeric',
            'kategori_id' => 'numeric'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        
        $validatedData = $validator->validated();
        if (array_key_exists("status_id", $validatedData)) {
            if ($validatedData["status_id"] != $barang->status_id){
                History::create([
                    'user_id'   => JWTAuth::user()->id,
                    'barang_id' => $barang['id'],
                    'status'    => BarangStatus::findOrFail($validatedData['status_id'])->nama
                ]);
            }
        }
        $barang->update($validatedData);
        $responseData = $barang->toArray();
        return response()->json($responseData, 201);
    }

    /**
     * Delete Barang.
     * 
     * Will delete barang and all of its images.
     * 
     * @urlParam id integer required The id of barang. Example: 1
     * @response status=204 scenario="delete success" {
     *  "message": "Barang deleted."
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     * "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="barang not found" {
     *  "message": "Not Found"
     * }
     */
    public function destroy(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $barang->user_id);
        $images = $barang->barangimages()->get();
        foreach ($images as $image) {
            FirebaseStorage::imageDelete('barangs/image/'. $image->id);
        }        
        $barang->delete();
        return response()->json(['message' => 'Barang deleted.'], 204);
    }
}
