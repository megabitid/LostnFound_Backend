<?php

namespace App\Traits;

trait StringValidator {
    public static function isImageBase64($base64) {
        preg_match("/(image[\/a-z]*)/", $base64, $matches);
        if ($matches) {
            if ($matches[0]=='image') return null;
            return $matches[0];
        }
        return null;
    }
}