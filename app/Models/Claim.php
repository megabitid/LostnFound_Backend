<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'barang_id', 
        'alamat', 
        'uri_tiket', 
        'no_telp', 
        'verified'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function barang(){
        return $this->belongsTo('App\Models\Barang');
    }
}
