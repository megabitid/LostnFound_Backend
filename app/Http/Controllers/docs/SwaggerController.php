<?php

namespace App\Http\Controllers\docs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Permissions;

class SwaggerController extends Controller
{
    /**
     * @hideFromAPIDocumentation
     */
    public function show(Request $request) {
        $jwt = $request->get('jwt');
        $externalSpec = $request->get('spec');
        if ($jwt==null) {
            if ($externalSpec != null) {
                return view('swagger.noauth', ['apispec'=>$externalSpec]);
            }
            return view('swagger.noauth', ['apispec'=>'./openapi']);
        }
        return view('swagger.index',['apispec'=>'./openapi', 'token'=>$jwt]);
    }
    /**
     * @hideFromAPIDocumentation
     */
    public function apispec(Request $request) {
        // uncemment line bellow and remove jwt middleware in route,
        // if you want private documentation. #hastag: closeapi
        // Permissions::isAdminOrSuperAdmin($request); 
        $specfilePath = base_path('storage/app/scribe/openapi.yaml');
        $specfile = response()->file($specfilePath);
        return $specfile;
    }
}
