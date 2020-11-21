<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'uri',
        'barang_id',
    ];

    // Relation many (barangImage) to one (barang)
    public function barang() 
    {
        return $this->belongsTo('App\Models\Barang');
    }
}
