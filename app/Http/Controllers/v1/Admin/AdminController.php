<?php

namespace App\Http\Controllers\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\database\QueryBuilder;
use App\Traits\FirebaseStorage;
use App\Traits\Permissions;
use App\Traits\StringValidator;
use App\Traits\ValidationError;
use Validator;
use Illuminate\Http\Request;
use App\Traits\database\Paginator;

/** 
 * @group v1 - User Admin
 * 
 * ### API for Managing User Admin
 * 
 */
class AdminController extends Controller
{
    /**
     * Get List Admin User
     * 
     * Will returns admin list including super admin.
     * 
     * ### orderBy query supported fields:
     * * All field of barang detail
     * 
     * @queryParam orderBy string Apply ordering based on specific field. 
     *              Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).
     *              Example: -id
     * @queryParam onlyTrashed string Retrive deleted admin user if true. No-example 
     * 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not super admin" {
     *  "message": "You must be super admin to do this."
     * }  
     */
    public function index(Request $request)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $query = User::where('role', '>', 0);
        $query = QueryBuilder::orderBy($request, $query);
        $query = QueryBuilder::onlyTrashed($request, $query);

        $paginator = Paginator::paginate($request, $query);
        $excludeFields = [
            'email',
            'email_verified_at',
            'created_at',
            'updated_at'
        ];
        $users = Paginator::exclude($paginator, $excludeFields);
        return UserResource::collection($users);
    }

    /**
     * Get Detail Admin User.
     * 
     * Admin User detail can be retrieved using this API.
     * 
     * @urlParam id integer required The id of admin user. Example: 6
     * 
     * @response status=200 scenario="success" {
     *  "id": 6,
     *  "nama": "Dr. Mathias Rohan II",
     *  "nip": "4539422570508851",
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 2,
     *  "stasiun_id": null,
     *  "created_at": null,
     *  "updated_at": null
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or super admin" {
     *  "message": "You must be owner or super admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * }
     */
    public function show(Request $request, $id)
    {
        $user = User::where('role','>', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
        
        $excludeFields = [
            'email',
            'email_verified_at'
        ];
        $user = $user->makeHidden($excludeFields);
        return response()->json($user, 200);
    }

    /**
     * Update Admin User.
     * 
     * Admin User can be updated using this API.
     * 
     * @urlParam id integer required The id of admin user. Example: 6
     * 
     * @bodyParam nama string required Admin/super admin name. Example: Tono
     * @bodyParam nip string required NIP admin/super admin. Example: SA1234567
     * @bodyParam password string required Account password. Example: UnguessablePassword
     * @bodyParam image string required Admin/super admin profile picture in URI Base64. Example: uribase64
     * @bodyParam stasiun_id numeric id stasiun where admin/super admin work. Example: 1
     * @bodyParam role numeric Role code of admin (1) and super admin (2). Example: 2
     * @response status=201 scenario="success" {
     *  "id": 6,
     *  "nama": "Tono",
     *  "nip": "SA1234567,
     *  "email": null,
     *  "email_verified_at": null,
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 2,
     *  "stasiun_id": 1,
     *  "created_at": null,
     *  "updated_at": "2020-12-10T17:18:49.000000Z"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "nip": [
     *          "The nip field is required."
     *      ],
     *      "password": [
     *          "The password field is required."
     *      ],
     *      "image": [
     *          "The image field is required."
     *      ]
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or super admin" {
     *  "message": "You must be owner or super admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function update(Request $request, $id)
    {
        $user = User::where('role','>', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'nip' => 'required|string',
            'password' => 'required|string',
            'image'=>'required|string',
            'stasiun_id'=>'numeric',
            'role'=>'numeric|max:2'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if(StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
        }

        if(array_key_exists('role', $validatedData)) {
            Permissions::isSuperAdmin($request);
        }

        $someUser = User::where('nip', '=', $validatedData['nip'])->first();
        if($someUser) {
            if ($someUser->id != $user->id) {
                return ValidationError::response(['nip'=>'Someone already use this nip.']);
            }
        }
        $validatedData['password'] = bcrypt($validatedData['password']);
        // upload image to storage
        $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/'.$id);
        $validatedData['image'] = $uri;
        // update database
        $user->update($validatedData);
        return response()->json($user, 201);
    }

    /**
     * Partial Update Admin User.
     * 
     * Admin User can be updated using this API.
     * 
     * @urlParam id integer required The id of admin user. Example: 6
     * 
     * @bodyParam nama string Admin/super admin name. Example: Tono Partial Update
     * @bodyParam nip string NIP admin/super admin. No-example
     * @bodyParam password string Account password. No-example
     * @bodyParam image string Admin/super admin profile picture in URI Base64. No-example
     * @bodyParam stasiun_id numeric id stasiun where admin/super admin work. No-example
     * @bodyParam role numeric Role code of admin (1) and super admin (2). No-example
     * @response status=201 scenario="success" {
     *  "id": 6,
     *  "nama": "Tono Partial Update",
     *  "nip": "SA1234567,
     *  "email": null,
     *  "email_verified_at": null,
     *  "image": "https://via.placeholder.com/640x480.png/008800?text=doloribus",
     *  "role": 2,
     *  "stasiun_id": 1,
     *  "created_at": null,
     *  "updated_at": "2020-12-10T17:18:49.000000Z"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama must be a string."
     *      ],
     *      "nip": [
     *          "The nip must be a string."
     *      ],
     *      "password": [
     *          "The password must be a string."
     *      ],
     *      "image": [
     *          "The image must be a string."
     *      ]
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or super admin" {
     *  "message": "You must be owner or super admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function updatePartial(Request $request, $id)
    {
        $user = User::where('role','>', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'string',
            'nip' => 'string',
            'password' => 'string',
            'stasiun_id'=>'numeric',
            'image'=>'string',
            'role'=>'numeric|max:2'
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        
        $validatedData = $validator->validated();
        if(array_key_exists('role', $validatedData)) {
            Permissions::isSuperAdmin($request);
        }
        if (array_key_exists("image", $validatedData)) {
            if(StringValidator::isImageBase64($validatedData['image']) == null) {
                return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
            }        
            // upload image to storage
            $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/'.$id);
            $validatedData['image'] = $uri;
        }

        if (array_key_exists("nip", $validatedData)) {
            $someUser = User::where('nip', '=', $validatedData['nip'])->first();
            if($someUser) {
                if ($someUser->id != $user->id) {
                    return ValidationError::response(['nip'=>'Someone already use this nip.']);
                }
            }
        }

        if (array_key_exists("password", $validatedData)) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }
        // update database
        $user->update($validatedData);
        return response()->json($user, 201);
    }

    /**
     * Delete Admin User.
     * 
     * Admin User can be deleted using this API.
     * Only super admin can delete admin.
     * 
     * @urlParam id integer required The id of admin user. Example: 6
     * 
     * @response status=204 scenario="delete success" {
     *  "message": "User deleted."
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or super admin" {
     *  "message": "You must be super admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function delete(Request $request, $id) {
        Permissions::isSuperAdmin($request);
        $user = User::where('role','>', 0)->findOrFail($id);
        $user->delete();
        return response()->json(['message'=>'User deleted.'], 204);
    }

    /**
     * Restore Deleted Admin User.
     * 
     * Deleted Admin User can be restored using this API.
     * Only super admin can restore admin.
     * 
     * @urlParam id integer required The id of admin user. Example: 6
     * 
     * @response status=200 scenario="restore success" {
     *  "message": "User restored."
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or super admin" {
     *  "message": "You must be super admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function restore(Request $request, $id) {
        Permissions::isSuperAdmin($request);
        $deletedUser = User::onlyTrashed()->where('role','>',0)->findOrFail($id);
        $deletedUser->restore();
        return response()->json(['message'=>'User restored.']);
    }
}
