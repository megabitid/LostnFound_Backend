<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids;

class BarangStatus extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nama',
    ];

    // encrypt id
    public function getHIdAttribute() {
        return Hashids::encode($this->attributes['id']);
    }

    protected $appends = [
        'h_id',
    ];

    // uncomment this to fully activate id encryption
    // protected $hidden = [
    //     'id',
    // ];

    // Relation one to many
    public function barangs() 
    {
        return $this->hasMany('App\Models\Barang', 'status_id');
    }
}
