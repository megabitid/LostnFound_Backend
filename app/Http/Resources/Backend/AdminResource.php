<?php

namespace App\Http\Resources\Backend;

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
            'nama'    => $this->nama,
            'nip'     => $this->nip,
            'email'   => $this->email,
            'stasiun' => $this->stasiun,
            'img'     => url('storage' , $this->image),
            'role'    => $this->role,
        ];
    }
}
