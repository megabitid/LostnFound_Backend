<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_barang',
        'tanggal',
        'stasiun_id',
        'kategori_id',
        'barangimage_id',
        'status_id',
        'user_id',
    ];

    public function stasiun(){
        return $this->belongsTo('App\Models\Stasiun', 'stasiun_id');
    }
    public function kategori(){
        return $this->belongsTo('App\Models\BarangKategori', 'kategori_id');
    }
    public function barangimage(){
        return $this->belongsTo('App\Models\BarangBarangImage', 'barangimage_id');
    }
    public function status(){
        return $this->belongsTo('App\Models\BarangStatus', 'status_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
