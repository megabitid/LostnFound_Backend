<?php

namespace App\Traits\database;

trait Paginator {
    public static function paginate($request, $query, $per_page=20) {
        $paginator = $query->paginate($per_page)->appends($request->query());
        return $paginator;
    }

    public static function exclude($paginator, $fields) {
        $data = $paginator->makeHidden($fields);
        $paginator->data = $data;
        return $paginator;
    }
}