<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'barang_id',
        'status'
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

    // protected $hidden = [
    //     'id',
    //     'user_id',
    //     'barang_id',
    // ];

    // Relation many to one
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation many to one
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
