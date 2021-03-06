<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\Barang;
use Hashids;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'nip',
        'email',
        'password',
        'image',
        'role',
        'stasiun_id',
        'email_verified_at',
    ];

    // encrypt id
    public function getHIdAttribute() {
        return Hashids::encode($this->attributes['id']);
    }
    public function getHStasiunIdAttribute() {
        return Hashids::encode($this->attributes['stasiun_id']);
    }

    protected $appends = [
        'h_id',
        'h_stasiun_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'deleted_at',
        // uncomment this to enable id encryption
        // 'id',
        // 'stasiun_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }
    
    public function stasiun()
    {
        return $this->belongsTo('App\Models\Stasiun');
    }
}
