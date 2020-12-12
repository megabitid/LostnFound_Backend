<?php

namespace App\Http\Controllers\v2\Android;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Permissions;
use App\Traits\ValidationError;
use App\Traits\database\QueryBuilder;
use App\Traits\FirebaseStorage;
use App\Traits\StringValidator;
use App\Traits\database\Paginator;
use Validator;

/** 
 * @group v2 - User 
 * 
 * ### API for Managing User 
 * 
 */
class UserController extends Controller
{
    private static $rfc5322 = "/(?:[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
    /**
     * Get List User
     * 
     * Will returns user list.
     * 
     * ### orderBy query supported fields:
     * * All field of its detail
     * 
     * @queryParam orderBy string Apply ordering based on specific field. 
     *              Usage: <b>-id</b> orderBy id (descending); <b>id</b> orderBy id (ascending).
     *              Example: -id
     * @queryParam onlyTrashed string Retrive deleted admin user if true. No-example 
     * 
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not admin" {
     *  "message": "You must be admin or super admin to do this."
     * }  
     */
    public function index(Request $request)
    {
        Permissions::isAdminOrSuperAdmin($request);
        $query = User::where('role', '=', 0);
        $query = QueryBuilder::orderBy($request, $query);
        
        $paginator = Paginator::paginate($request, $query);
        $excludeFields = [
            'nip',
            'stasiun_id',
            'role',
            'created_at',
            'updated_at'
        ];
        $users = Paginator::exclude($paginator, $excludeFields);
        return UserResource::collection($users);
    }

    /**
     * Get Detail User.
     * 
     * User detail can be retrieved using this API.
     * 
     * @urlParam id integer required The id of user. Example: 1
     * 
     * @response status=200 scenario="success" {
     *  "id": 1,
     *  "nama": "Yoshiko Gottlieb",
     *  "email": "katheryn42@okeefe.biz",
     *  "email_verified_at": "2020-12-10T17:18:48.000000Z",
     *  "image": "https://via.placeholder.com/640x480.png/00ddee?text=nostrum",
     *  "created_at": null,
     *  "updated_at": null
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     *  "message": "You must be owner or admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * }
     */
    public function show(Request $request, $id)
    {
        $user = User::where('role','=', 0)->findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $user->id);
        $excludeFields = [
            'nip',
            'stasiun_id',
            'role',
        ];
        $user = $user->makeHidden($excludeFields);
        return response()->json($user, 200);
    }

    /**
     * Update User.
     * 
     * User can be updated using this API.
     * 
     * @urlParam id integer required The id of user. Example: 1
     * 
     * @bodyParam nama string required User name. Example: Yoshiko Gottlieb Updated
     * @bodyParam email string required User email. Example: katheryn42@okeefe.biz
     * @bodyParam image string required User profile picture in URI Base64. Example: uribase64
     * 
     * @response status=201 scenario="success" {
     * "id": 1,
     * "nama": "Yoshiko Gottlieb Updated",
     * "nip": "2401108140514821",
     * "email": "katheryn42@okeefe.biz",
     * "email_verified_at": "2020-12-10T17:18:48.000000Z",
     * "image": "https://via.placeholder.com/640x480.png/00ddee?text=nostrum",
     * "role": 0,
     * "stasiun_id": null,
     * "created_at": null,
     * "updated_at": "2020-12-12T02:26:55.000000Z"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama field is required."
     *      ],
     *      "email": [
     *          "The email field is required."
     *      ],
     *      "image": [
     *          "The image field is required."
     *      ]
     * }
     * @response status=401 scenario="Unauthorized" {
     *  "message": "Token not provided"
     * }
     * @response status=403 scenario="not owner or admin" {
     *  "message": "You must be owner or admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function update(Request $request, $id)
    {
        $user = User::where('role','=', 0)->findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'email' => ['required', 'max:254', "regex:{$this::$rfc5322}"],
            'image'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }
        $validatedData = $validator->validated();
        if(StringValidator::isImageBase64($validatedData['image']) == null) {
            return ValidationError::response(['image'=>'You must use urlBase64 image format.']);
        }

        $someUser = User::where('email', '=', $validatedData['email'])->first();
        if($someUser) {
            if ($someUser->id != $user->id) {
                return ValidationError::response(['email'=>'Someone already use this email.']);
            }
        }
        // upload image to storage
        $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/'.$id);
        $validatedData['image'] = $uri;
        // update database
        $user->update($validatedData);
        return response()->json($user, 201);
    }

    /**
     * Partial Update User.
     * 
     * User can be updated using this API.
     * 
     * @urlParam id integer required The id of user. Example: 1
     * 
     * @bodyParam nama string User name. Example: Yoshiko Gottlieb Partial Update
     * @bodyParam email string User email. Example: No-example
     * @bodyParam image string User profile picture in URI Base64. No-example
     * @bodyParam password string New user password. No-example
     * 
     * @response status=201 scenario="success" {
     *  "id": 1,
     *  "nama": "Yoshiko Gottlieb Partial Update",
     *  "nip": null,
     *  "email": "katheryn42@okeefe.biz",
     *  "email_verified_at": "2020-12-10T17:18:48.000000Z",
     *  "image": "https://via.placeholder.com/640x480.png/00ddee?text=nostrum",
     *  "role": 0,
     *  "stasiun_id": null,
     *  "created_at": null,
     *  "updated_at": "2020-12-12T02:26:55.000000Z"
     * }
     * @response status=400 scenario="bad request" {
     *  "message": "Validation Error",
     *  "errors": {
     *      "nama": [
     *          "The nama must be a string."
     *      ],
     *      "email": [
     *          "The email must be a string."
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
     * @response status=403 scenario="not owner or admin" {
     *  "message": "You must be owner or admin to do this."
     * }  
     * @response status=404 scenario="data not found" {
     *  "message": "Not Found"
     * } 
     */
    public function updatePartial(Request $request, $id)
    {
        $user = User::where('role', '=', 0)->findOrFail($id);
        Permissions::isOwnerOrSuperAdmin($request, $user->id);
        $validator = Validator::make($request->all(), [
            'nama' => 'string',
            'email' => ['max:254', "regex:{$this::$rfc5322}"],
            'password' => 'string',
            'image' => 'string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        if (array_key_exists("image", $validatedData)) {
            if (StringValidator::isImageBase64($validatedData['image']) == null) {
                return ValidationError::response(['image' => 'You must use urlBase64 image format.']);
            }
            // upload image to storage
            $uri = FirebaseStorage::imageUpload($validatedData['image'], 'users/image/' . $id);
            $validatedData['image'] = $uri;
        }

        if (array_key_exists("email", $validatedData)) {
            $someUser = User::where('email', '=', $validatedData['email'])->first();
            if ($someUser) {
                if ($someUser->id != $user->id) {
                    return ValidationError::response(['email' => 'Someone already use this email.']);
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
}
