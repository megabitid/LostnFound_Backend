<?php

namespace App\Http\Controllers\API\android;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Permissions;
use App\Exceptions\ApiException;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            throw new ApiException('User not found.', 404);
        }
        return response()->json($user, 200);
    }
}
