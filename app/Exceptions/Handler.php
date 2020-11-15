<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use GuzzleHttp\Exception\ClientException;
use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // general http exception handler
        $this->renderable(function(NotFoundHttpException $e, $request) {
            $response = [
                'message'=>'Not Found',
            ];
            return response()->json($response, $e->getStatusCode());
        });
        $this->renderable(function(HttpException $e) {
            $response =[
                'message'=>$e->getMessage()
            ];
            return response()->json($response, $e->getStatusCode());
        });        

        // oauth2 handler
        $this->renderable(function(ClientException $e, $request) {
            $response = [
                'message'=>$e->getMessage(),
            ];
            if (config('app.debug')==true) {
                $response['exception']=get_class($e);
                $response['trace']=$e->getTrace();
            }
            return response()->json($response, 400);
        });
        // Jwt Handler
        $this->renderable(function(UnauthorizedHttpException $e) {
            $response = [
                'message'=>$e->getMessage()
            ];
            return response()->json($response, $e->getStatusCode());
        });
        $this->renderable(function(TokenExpiredException $e) {
            $response = [
                'message'=>$e->getMessage()
            ];
            return response()->json($response, 401);
        });
        $this->renderable(function(TokenInvalidException $e) {
            $response = [
                'message'=>$e->getMessage()
            ];
            return response()->json($response, 401);
        });
        $this->renderable(function(TokenBlacklistedException $e) {
            $response = [
                'message'=>$e->getMessage()
            ];
            return response()->json($response, 401);
        });
        $this->renderable(function(JWTException $e) {
            $response = [
                'message'=>$e->getMessage()
            ];
            return response()->json($response, 401);
        });
        // catch any unhandled exception
        $this->renderable(function(Exception $e) {
            $response = [
                'message'=>$e->getMessage(),
                
            ];
            if (config('app.debug')==true) {
                $response['class'] = get_class($e);
                $response['trace'] = $e->getTrace();
            }
            return response()->json($response, 500);
        });
    }
}

