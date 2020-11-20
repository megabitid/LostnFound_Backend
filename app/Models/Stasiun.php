<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stasiun extends Model
{
    use HasFactory;
    
    // Table  no created_at & updated_at
    public  $timestamps = false;

    protected $fillable=[
        'nama',
    ];

    // Relation many to one
    public function barangs() 
    {
        return $this->hasMany('App\Models\Barang');
    }
}