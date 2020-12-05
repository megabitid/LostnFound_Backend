<?php

namespace App\Traits\database;

trait QueryBuilder {
    public static function whereFields($request, $query, $fields) {
        foreach($fields as $field){
            if(!empty($request->$field)){
                $query->where($field, '=', $request->$field);
            }
        }
        return $query;
    }

    public static function orderBy($request, $query) {
        if(!empty($request->orderBy)){
            preg_match('/^-/', $request->orderBy, $matches);
            if ($matches){
                $orderField = trim($request->orderBy, '-');
                $query = $query->orderBy($orderField, 'DESC');
            } else {
                $query = $query->orderBy($request->orderBy, 'ASC');
            }
        }
        return $query;
    }

    public static function searchIn($request, $query, $searchFields) {
        if(!empty($request->search)){
            $query->where(function($query) use($request, $searchFields){
                $searchWildcard = '%' . $request->search . '%';
                foreach($searchFields as $field){
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }
            });
        }
        return $query;
    }
}