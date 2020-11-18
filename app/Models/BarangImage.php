<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'link',
    ];

    public function barangs() {
        $this->hasMany('App\Models\Barang', 'barangimage_id');
    }
}
