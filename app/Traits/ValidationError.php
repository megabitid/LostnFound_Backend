<?php

namespace App\Traits;

trait ValidationError {
    public static function response($errors) {
        return response()->json(['message'=>'Validation Error', 'errors'=>$errors], 400);
    }
}
