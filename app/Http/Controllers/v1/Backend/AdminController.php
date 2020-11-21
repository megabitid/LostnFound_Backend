<?php

namespace App\Http\Controllers\v1\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AdminRequest;
use App\Http\Resources\Backend\AdminResource;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::get();
        return AdminResource::collection($users);
    }

    // Store
    public function store(AdminRequest $request)
    {
        try {
            if (!auth()->user()->role == 2) {
                return response(['message' => 'You are not superadmin']);
            }
            $data = $request->all();
            if ($image = $request->file('image')) {
                $data['image'] = $image->storeAs('image_users', time() . '.' . $image->getClientOriginalExtension());
            }
            $data['password'] = bcrypt($request->password);
            $data['role']     = 1;
            User::create($data);
            return response()->json(['message' => 'Admin data added successfully'], 200);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

    // Update
    public function update(AdminRequest $request, User $user)
    {
        try {
            if (!auth()->user()->role == 2) {
                return response(['message' => 'You are not superadmin']);
            }
            $data  = $request->all();
            if ($image = $request->file('image')) {
                $user->image == 'image_users/default_user.jpg' ? : Storage::delete($user->image);
                $data['image'] = $image->storeAs('image_users', time() . '.' . $image->getClientOriginalExtension());
            }
            $data['password'] = bcrypt($request->password);
            $user->update($data);
            return AdminResource::make($user);
        } catch (\Throwable $th) {
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }

    // Delete
    public function destroy(User $user)
    {
        try{
            if (!auth()->user()->role == 2) {
                return response(['message' => 'You are not superadmin']);
            }
            $user->image == 'image_users/default_user.jpg' ? : Storage::delete($user->image);
            $user->delete();
            return response(['message' => 'Admin data deleted successfully'], 200);
        } catch(\Trwowable $th){
            return response(['message' => 'Whoops', 'error' => $th->getMessage()], 500);
        }
    }
}
