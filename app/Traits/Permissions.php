<?php

namespace App\Traits;

use App\Exceptions\ApiException;

trait Permissions {
    public static function isOwner($request, $objId) {
        if ($request->user()->id == $objId) {
            return true;
        }
        throw new ApiException('You must be the owner to do this.', 403);
    }
    public static function isOwnerOrAdminOrSuperAdmin($request, $objId) {
        if ($request->user()->role > 0) {
            return true;
        }
        if ($request->user()->id == $objId) {
            return true;
        }
        throw new ApiException('You must be the owner or admin to do this.', 403);
    }
    public static function isSuperAdmin($request) {
        if ($request->user()->role == 2) {
            return true;
        }
        throw new ApiException('You must be super admin to do this.', 403);
    }
    public static function isAdminOrSuperAdmin($request) {
        if ($request->user()->role > 0) {
            return true;
        }
        throw new ApiException('You must be admin or super admin to do this.', 403);
    }
    public static function isOwnerOrSuperAdmin($request, $objId) {            
        if ($request->user()->role == 2) {
            return true;
        }
        if ($request->user()->id == $objId) {
            return true;
        }
        throw new ApiException('You must be owner or super admin to do this.', 403);

    }
}
