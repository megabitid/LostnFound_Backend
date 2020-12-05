<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Claim;
use Illuminate\Http\Request;
use App\Traits\ValidationError;
use App\Traits\StringValidator;
use App\Traits\FirebaseStorage;
use Validator;
use App\Traits\Permissions;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        foreach($fields as $field){
            if(!empty($request->$field)){
                $query->where($field, '=', $request->$field);
            }
        }
        // order by desc or asc in field specified: use "?orderBy=-created_at" to order by id descending, and "?orderBy=id" to order by ascending.
        if(!empty($request->orderBy)){
            $query = $query->orderByRaw($request->orderBy);
        }
        // search text contains in this field.
        if (!empty($request->search)) {
            $searchFields = [
                'alamat',
                'no_telp'
            ];
            $query->where(function ($query) use ($request, $searchFields) {
                $searchWildcard = '%' . $request->search . '%';
                foreach ($searchFields as $field) {
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }
            });
        }
       $claims = $query->paginate(20);
       return Resource::collection($claims);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $claim = Claim::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $claim->user_id);
        return response()->json($claim);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $claim = Claim::findOrFail($id);
        Permissions::isOwnerOrAdminOrSuperAdmin($request, $claim->user_id);
        $claim->delete();
        return response()->json(['message'=>'Claim data deleted.'], 204);
    }
}
