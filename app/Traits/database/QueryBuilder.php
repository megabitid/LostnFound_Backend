<?php

namespace App\Traits\database;

use Illuminate\Support\Carbon;

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
        } else {
            $query = $query->orderBy('id', 'ASC');
        }
        return $query;
    }

    public static function onlyTrashed($request, $query) {
        if(!empty($request->onlyTrashed)) {
            $option = $request->onlyTrashed === "true" ? true:false;
            if ($option) {
                $query = $query->onlyTrashed();
            }
        }
        return $query;
    }

    public static function limitDay($request, $query) {
        if(!empty($request->limitDay)) {
            $date = Carbon::today()->subDays($request->limitDay);
            $query = $query->where('created_at', '>=', $date);
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
    public static function searchDate($request, $query, $dateFields) {
        if(!empty($request->searchDate)){
            $query->where(function($query) use($request, $dateFields){
                $searchWildcard = '%' . $request->searchDate. '%';
                foreach($dateFields as $field){
                    $query->orWhere($field, 'LIKE', $searchWildcard);
                }
            });
        }
        return $query;
    }
}