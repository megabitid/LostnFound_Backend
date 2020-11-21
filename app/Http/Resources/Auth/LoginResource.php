<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'message'   => 'Login success!',
            'nama'      => $this->nama,
            'nip'       => $this->nip,
            'stasiun'   => $this->stasiun,
            'image'     => url('storage', $this->image),
            'role'      => $this->role,
            'token'     => $this->token,
        ];
    }
}
