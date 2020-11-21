<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_barang',
        'lokasi',
        'tanggal',
        'deskripsi',
        'warna',
        'merek',
        'user_id',
        'stasiun_id',
        'status_id',
        'kategori_id'
    ];

    // Relation many to one
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stasiun()
    {
        return $this->belongsTo('App\Models\Stasiun');
    }
    
    public function kategori()
    {
        return $this->belongsTo('App\Models\BarangKategori', 'kategori_id');
    }
    
    public function status()
    {
        return $this->belongsTo('App\Models\BarangStatus', 'status_id');
    }

    // Relation one (barang) to many (barangImage)
    public function barangimages()
    {
        return $this->hasMany('App\Models\BarangImage');
    }
}
