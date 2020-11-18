<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKategori extends Model
{
    use HasFactory;

    // Table  no created_at & updated_at
    public  $timestamps = false;

    protected $fillable = [
        'nama',
    ];

    public function barangs() {
        $this->hasMany('App\Models\Barang', 'kategori_id');
    }
}
