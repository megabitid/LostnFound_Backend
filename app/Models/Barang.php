<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'user_id',
        'stasiun_id',
        'barang_kategori_id',
        'created_at',
        'updated_at',
    ];

    // Relation many to one
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relation one to one
    public function stasiun()
    {
        return $this->belongsTo('App\Models\Stasiun');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Models\BarangKategori');
    }

    // Relation one to many (barangImage)
    public function barangimages()
    {
        return $this->hasMany('App\Models\BarangImage', );
    }
}
