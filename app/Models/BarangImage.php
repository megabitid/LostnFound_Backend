<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    // Relation many to one (Barangs)
    public function barang() 
    {
        $this->belongsTo('App\Models\Barang');
    }
}
