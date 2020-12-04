<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','barang_id','status'];

    // Relation many to one
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation many to one
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
