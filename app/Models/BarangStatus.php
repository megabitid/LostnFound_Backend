<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    // Relation one to many
    public function barangs() 
    {
        return $this->hasMany('App\Models\Barang', 'status_id');
    }
}
