<?php

namespace App\Http\Controllers\v1\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\StasiunRequest;
use App\Http\Resources\Backend\StasiunResource;
use App\Models\Stasiun;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StasiunController extends Controller
{
    // READ
    public function index()
    {
        try {
            $stasiuns = Stasiun::get();
            return StasiunResource::collection($stasiuns);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

    // STORE
    public function store(StasiunRequest $request)
    {
        try {
            $data = $request->all();
            Stasiun::create($data);
            return response()->json(['message' => 'Stasiun data added successfully'], 200);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }  
    }

    // UPDATE
    public function update(StasiunRequest $request, Stasiun $stasiun)
    {
        try {
            $data = $request->all();
            $stasiun->update($data);
            return StasiunResource::make($stasiun);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

    // 
    public function destroy(Stasiun $stasiun)
    {
        try {
            $stasiun->delete();
            return response()->json(['message' => 'Stasiun data deleted successfully'], 200);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

}
