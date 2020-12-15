<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids;

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

    // encrypt id
    public function getHIdAttribute() {
        return Hashids::encode($this->attributes['id']);
    }
    public function getHUserIdAttribute() {
        return Hashids::encode($this->attributes['user_id']);
    }
    public function getHBarangIdAttribute() {
        return Hashids::encode($this->attributes['barang_id']);
    }

    protected $appends = [
        'h_id',
        'h_user_id', 
        'h_barang_id',
    ];

    // uncomment this to fully activate id encryption
    protected $hidden = [
        'id',
        'user_id',
        'barang_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function barang(){
        return $this->belongsTo('App\Models\Barang');
    }
}
