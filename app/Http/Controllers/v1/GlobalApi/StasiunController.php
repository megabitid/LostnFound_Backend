<?php

namespace App\Http\Controllers\v1\GlobalApi;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource;
use App\Models\Stasiun;
use App\Traits\ValidationError;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StasiunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stasiuns = Stasiun::paginate(20);
        return Resource::collection($stasiuns);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $stasiun = Stasiun::create($validatedData);
        return response()->json($stasiun, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stasiun = Stasiun::findOrFail($id);
        return response()->json($stasiun);
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
        $stasiun = Stasiun::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'nama'=>'required|string',
        ]);
        if ($validator->fails()) {
            return ValidationError::response($validator->errors());
        }

        $validatedData = $validator->validated();
        $stasiun->update($validatedData);
        return response()->json($stasiun, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stasiun = Stasiun::findOrFail($id);
        $stasiun->delete();
        return response()->json(['message' => 'Stasiun data deleted successfully'], 204);
    }
}
