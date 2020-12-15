<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Hashids;

class HashidDecode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        $foreignKeys = [
            'user_id',
            'barang_id',
            'status_id',
            'kategori_id',
            'stasiun_id',
        ];
        foreach ($foreignKeys as $foreignKey) {
            if ($request->has($foreignKey)) {
                $request[$foreignKey]= Hashids::decode($request->$foreignKey)[0];
            }
        }
        return $next($request);
    }
}
