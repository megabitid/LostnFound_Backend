<?php

namespace App\Traits;

use App\Exceptions\ApiException;
use App\Models\User;

trait Permissions {
    public static function isOwner($request, $obj) {
        if ($request->user()->id == $obj) {
            return true;
        }
        throw new ApiException('You must be the owner to do this.', 401);
    }
}
