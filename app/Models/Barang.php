<?php

namespace App\Models;

use Hashids;
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
    
    // encrypt id
    public function getHIdAttribute() {
        return Hashids::encode($this->attributes['id']);
    }

    public function getHUserIdAttribute() {
        if (array_key_exists('user_id', $this->attributes))
            return Hashids::encode($this->attributes['user_id']);
        return "";
    }

    public function getHStasiunIdAttribute() {
        if (array_key_exists('stasiun_id', $this->attributes))
            return Hashids::encode($this->attributes['stasiun_id']);
        return "";
    }
    public function getHStatusIdAttribute() {
        if (array_key_exists('status_id', $this->attributes))
            return Hashids::encode($this->attributes['status_id']);
        return "";
    }
    public function getHKategoriIdAttribute() {
        if (array_key_exists('kategori_id', $this->attributes))
            return Hashids::encode($this->attributes['kategori_id']);
        return "";
    }

    protected $appends = [
        'h_id',
        'h_user_id',
        'h_stasiun_id',
        'h_status_id',
        'h_kategori_id'
    ];

    // uncomment this to fully activate id encryption
    protected $hidden = [
        'id',
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

    // Relation one(barang) to many (history)
    public function histories()
    {
        return $this->hasMany('App\Models\History');
    }
}
