<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
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
            'id'                => $this->id,
            'nama'              => $this->nama,
            'nip'               => $this->nip,
            'email'             => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'stasiun'           => $this->stasiun,
            'image'             => $this->image,
            'role'              => $this->role,
            'token'             => $this->token
        ];
    }
}
