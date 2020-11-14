<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use App\Models\User;
use Exception;

;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // get data admin
    public function index()
    {
        $admin = User::whereRole(1)->get();
        return AdminResource::collection($admin);
    }
    // Show detail admin
    public function show(User $user)
    {
        try{
            return AdminResource::make($user);
        }catch(Exception $e) {
            return response()->json(['message' => 'Whoops'], 404);
        }
    }
}
