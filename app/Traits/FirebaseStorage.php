<?php

namespace App\Traits;

use Google\Cloud\Core\Exception\NotFoundException;

trait FirebaseStorage {
    public static function imageUpload($urlBase64, $name) {
        $storage = app('firebase.storage');
        $bucket = $storage->getBucket();
        if($mimetype = StringValidator::isImageBase64($urlBase64)) {
            $metadata = ['contentType'=>$mimetype];
        }
        $object = $bucket->upload(
            fopen($urlBase64, 'r'),
            [
                'name'=>$name,
                'metadata'=>$metadata,
                'predefinedAcl'=>"publicRead",
            ],
        );
        $uri = "https://storage.googleapis.com/".$bucket->name()."/".$name;
        return $uri;
    }
    public static function imageDelete($name) {
        $storage = app('firebase.storage');
        $bucket = $storage->getBucket();
        $object = $bucket->object($name);
        try {
            $object->delete();
        } catch (NotFoundException $e) {
            // just continure if file not found.
        }
        
    }
    public static function getUrl($name) {
        $storage = app('firebase.storage');
        $bucket = $storage->getBucket();
        $uri = $bucket->object($name)->signedUrl(strtotime('+7 day'));
        return $uri;
    }
}