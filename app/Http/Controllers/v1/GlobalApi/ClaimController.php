<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Claim;
use App\Traits\database\QueryBuilder;
use Illuminate\Http\Request;
use App\Traits\ValidationError;
use App\Traits\StringValidator;
use App\Traits\FirebaseStorage;
use Validator;
use App\Traits\Permissions;
use App\Traits\database\Paginator;

/** 
 * @group v1 - Claim
 * 
 * ### API for Managing Claim
 * 
 * Claim is when user want to claim barang hilang.
 * Claim must be verified by admin before taking barang hilang.
 * After claim verified, user must show this status to take barang hilang.
 * Barang hilang status must be updated after claim is verified.
 */
class ClaimController extends Controller
{
    /**
     * Get List Claim
     * 
     * ### Claim parameter query supported:
     * * id
     * * user_id
     * * verified
     * * barang_id
     * * no_telp
     * 
     * ### orderBy query supported fields:
     * * All field of claim detail
     * 
     * ### search query will search string inside these fields:
     * * alamat
     * * no_telp
     *       
     * <aside class="warning"> We still use limit offset pagination. In future will be replaced with cursor based pagination.</aside>
     * 
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
        Permissions::isAdminOrSuperAdmin($request);
        $query = Claim::select('*');
        $fields = [
            'id',
            'user_id',
            'verified',
            'no_telp',
            'barang_id',
        ];
        // limit query by specific field. Example: ?id=1
        $query = QueryBuilder::whereFields($request, $query, $fields);

        // order by desc or asc in field specified: use "?orderBy=-created_at" to order by id descending, and "?orderBy=id" to order by ascending.
        $query = QueryBuilder::orderBy($request, $query);
        // search text contains in this field.            
        $searchFields = [
                'alamat',
                'no_telp'
            ];
        $query = QueryBuilder::searchIn($request, $query, $searchFields);
        $query = $query->with('barang:id,nama_barang');
        $claims = Paginator::paginate($request, $query);
        return Resource::collection($claims);

    }

    /**
     * Add Claim.
     * 
     * Claim can be added using this API.
     * Claim can be added for barang hilang only.
     * 
     * @bodyParam user_id string required id user that want to claim. Example: 1
     * @bodyParam barang_id integer required id barang that user want to claim. Example: 1
     * @bodyParam alamat string required Alamat of user. Example: Jalan Mangga, Block X/20
     * @bodyParam uri_tiket string required Ticket image of user in URI Base64 format. Example: uribase64
     * @bodyParam no_telp string required Phone number of user. Example: 08123456789
     * 
     * @response status=201 scenario="success" {
     *  "user_id": 1,
     *  "barang_id": 1,
     *  "alamat": "Jalan Mangga, Block X/20",
     *  "uri_tiket": "https://storage.googleapis.com/megabitlostnfound.appspot.com/claims/ticket_image/4",
     *  "no_telp": "08123456789",
     *  "verified": 0,
     *  "updated_at": "2020-12-11T12:30:49.000000Z",
     *  "created_at": "2020-12-11T12:30:48.000000Z",
     *  "id": 4
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "user_id": [
     *          "The user id field is required."
     *      ],
     *      "barang_id": [
     *          "The barang id field is required."
     *      ],
     *      "alamat": [
     *          "The alamat field is required."
     *      ],
     *      "uri_tiket": [
     *          "The uri tiket field is required."
     *      ],
     *      "no_telp": [
     *          "The no telp field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'user_id' => 'required|numeric',
            'barang_id' => 'required|numeric',
            'alamat' => 'required|string',
            'uri_tiket' => 'required|string',
            'no_telp' => 'required|string'
        ]);

        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $validatedData['verified'] = 0;

        //cek image format
        if (StringValidator::isImageBase64($validatedData['uri_tiket']) == null) {
            return ValidationError::response(['uri_tiket' => 'You must use urlBase64 image format.']);
        }
        $uriBase64 = $validatedData['uri_tiket'];
        $validatedData['uri_tiket'] = "";
        $claim = Claim::create($validatedData);

        // upload image to firebase
        $uri = FirebaseStorage::imageUpload($uriBase64, 'claims/ticket_image/' . $claim->id);
        $validatedData['uri_tiket'] = $uri;

        $claim->update(['uri_tiket' => $uri]);

        return response()->json($claim, 201);
    }

    public function show(Request $request, $id)
    {
        $claim = Claim::with('barang:id,nama_barang')->findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $claim->user_id);
        return response()->json($claim);
        
    }

    /**
     * Update Claim.
     * 
     * Claim can be updated using this API.
     * Claim can be updated for barang hilang only.
     * 
     * @bodyParam user_id string required id user that want to claim. Example: 1
     * @bodyParam barang_id integer required id barang that user want to claim. Example: 1
     * @bodyParam alamat string required Alamat of user. Example: Jalan Mangga, Block X/21
     * @bodyParam uri_tiket string required Ticket image of user in URI Base64 format. Example: uribase64
     * @bodyParam no_telp string required Phone number of user. Example: 08123456789
     * 
     * @response status=201 scenario="success" {
     *  "id": 4
     *  "user_id": 1,
     *  "barang_id": 1,
     *  "alamat": "Jalan Mangga, Block X/21",
     *  "uri_tiket": "https://storage.googleapis.com/megabitlostnfound.appspot.com/claims/ticket_image/4",
     *  "no_telp": "08123456789",
     *  "verified": 0,
     *  "updated_at": "2020-12-11T12:40:49.000000Z",
     *  "created_at": "2020-12-11T12:30:48.000000Z",
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "user_id": [
     *          "The user id field is required."
     *      ],
     *      "barang_id": [
     *          "The barang id field is required."
     *      ],
     *      "alamat": [
     *          "The alamat field is required."
     *      ],
     *      "uri_tiket": [
     *          "The uri tiket field is required."
     *      ],
     *      "no_telp": [
     *          "The no telp field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     * "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function update(Request $request, $id)
    {
        $claim = Claim::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $claim->user_id);

        $validator =  Validator::make($request->all(), [
            'user_id' => 'required|numeric',
            'barang_id' => 'required|numeric',
            'alamat' => 'required|string',
            'uri_tiket' => 'required|string',
            'no_telp' => 'required|string'
        ]);

        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();

        //cek image format
        if (StringValidator::isImageBase64($validatedData['uri_tiket']) == null) {
            return ValidationError::response(['uri_tiket' => 'You must use urlBase64 image format.']);
        }
        $uriBase64 = $validatedData['uri_tiket'];

        // upload image to firebase
        $uri = FirebaseStorage::imageUpload($uriBase64, 'claims/ticket_image/' . $claim->id);
        $validatedData['uri_tiket'] = $uri;

        $claim->update($validatedData);

        return response()->json($claim, 201);
    }

    /**
     * Partial Update Claim.
     * 
     * Claim can be updated using this API.
     * Claim can be updated for barang hilang only.
     * 
     * @bodyParam user_id string id user that want to claim. No-example
     * @bodyParam barang_id integer id barang that user want to claim. No-example
     * @bodyParam alamat string Alamat of user. Example: No-example
     * @bodyParam uri_tiket string Ticket image of user in URI Base64 format. No-example
     * @bodyParam no_telp string Phone number of user. Example: 0999999999
     * 
     * @response status=201 scenario="success" {
     *  "id": 4
     *  "user_id": 1,
     *  "barang_id": 1,
     *  "alamat": "Jalan Mangga, Block X/21",
     *  "uri_tiket": "https://storage.googleapis.com/megabitlostnfound.appspot.com/claims/ticket_image/4",
     *  "no_telp": "0999999999",
     *  "verified": 0,
     *  "updated_at": "2020-12-11T12:40:49.000000Z",
     *  "created_at": "2020-12-11T12:30:48.000000Z",
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "user_id": [
     *          "The user id field is required."
     *      ],
     *      "barang_id": [
     *          "The barang id field is required."
     *      ],
     *      "alamat": [
     *          "The alamat field is required."
     *      ],
     *      "uri_tiket": [
     *          "The uri tiket field is required."
     *      ],
     *      "no_telp": [
     *          "The no telp field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     * "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function updatePartial(Request $request, $id)
    {
        $claim = Claim::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $claim->user_id);

        $validator =  Validator::make($request->all(), [
            'user_id' => 'numeric',
            'barang_id' => 'numeric',
            'alamat' => 'string',
            'uri_tiket' => 'string',
            'no_telp' => 'string'
        ]);

        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();

        if (array_key_exists("uri_tiket", $validatedData)) {
            if (StringValidator::isImageBase64($validatedData['uri_tiket']) == null) {
                return ValidationError::response(['uri_tiket' => 'You must use urlBase64 image format.']);
            }
            $uriBase64 = $validatedData['uri_tiket'];

            // upload image to firebase
            $uri = FirebaseStorage::imageUpload($uriBase64, 'claims/ticket_image/' . $claim->id);
            $validatedData['uri_tiket'] = $uri;
        }
        $claim->update($validatedData);
        return response()->json($claim, 201);
    }

    /**
     * Verify Claim.
     * 
     * Claim can be verified by admin only using this api.
     * 
     * @bodyParam verified boolean id user that want to claim. Example: 1
     * 
     * @response status=201 scenario="success" {
     *  "id": 4
     *  "user_id": 1,
     *  "barang_id": 1,
     *  "alamat": "Jalan Mangga, Block X/21",
     *  "uri_tiket": "https://storage.googleapis.com/megabitlostnfound.appspot.com/claims/ticket_image/4",
     *  "no_telp": "0999999999",
     *  "verified": 1,
     *  "updated_at": "2020-12-11T12:45:49.000000Z",
     *  "created_at": "2020-12-11T12:30:48.000000Z",
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "verified": [
     *          "The verified field is required."
     *      ]
     *  }
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * } 
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function updateVerified(Request $request, $id)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $claim = Claim::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'verified'=>'required|boolean'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        $claim->update($validatedData);
        return response()->json($claim, 201);
    }

    /**
     * Delete Claim.
     * 
     * Claim can be deleted using this API. 
     * Ticket image also deleted in storage.
     * 
     * @urlParam id integer required The id of barang status. Example: 4
     * 
     * @response status=204 scenario="delete success" {
     *  "message": "Claim data deleted."
     * } 
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     * "message": "You must be the owner or admin to do this."
     * }
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function destroy(Request $request, $id)
    {
        $claim = Claim::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $claim->user_id);
        FirebaseStorage::imageDelete('claims/ticket_image/' . $claim->id);
        $claim->delete();
        return response()->json(['message'=>'Claim data deleted.'], 204);
    }
}
