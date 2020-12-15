<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids;

class BarangImage extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'uri',
        'barang_id',
    ];

    // encrypt id
    public function getHIdAttribute() {
        return Hashids::encode($this->attributes['id']);
    }

    public function getHBarangIdAttribute() {
        return Hashids::encode($this->attributes['barang_id']);
    }

    protected $appends = [
        'h_id',
        'h_barang_id',
    ];

    // uncomment this to fully activate id encryption
    protected $hidden = [
        'id',
        'barang_id'
    ];

    // Relation many (barangImage) to one (barang)
    public function barang() 
    {
        return $this->belongsTo('App\Models\Barang');
    }
}
