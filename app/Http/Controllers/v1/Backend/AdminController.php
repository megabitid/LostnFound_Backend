<?php

namespace App\Http\Controllers\v1\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AdminRequest;
use App\Http\Resources\Backend\AdminResource;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Store
    public function store(AdminRequest $request)
    {
        try {
            dd('ok');
            $data = $request->all();
            if ($img = $request->file('image')) {
                $data['image'] = $img->storeAs('image_users', time() . '.' . $img->getClientOriginalExtension());
            }
            $data['password'] = bcrypt($request->password);
            $data['role']     = 1;
            User::create($data);
            return response()->json(['message' => 'Data berhasil ditambahkan']);
        } catch (\Throwable $th) {
            return response(['error' => $th->getMessage()], 500);            
        }
    }

    // Update
    public function update(AdminRequest $request, User $user)
    {
        try {
            $data  = $request->all();
            if ($img = $request->file('image')) {
                $user->image == 'img_users/default_user.jpg' ? : Storage::delete($user->image);
                $data['image'] = $img->storeAs('image_users', time() . '.' . $img->getClientOriginalExtension());
            }
            $data['password'] = bcrypt($request->password);
            $user->update($data);
            return AdminResource::make($user);
        } catch (\Throwable $th) {
            return response(['error' => $th->getMessage()], 500);            
        }
    }
}
