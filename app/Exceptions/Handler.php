<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use GuzzleHttp\Exception\ClientException;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        $this->renderable(function(NotFoundHttpException $e, $request) {
            $response = [
                'message'=>'Not Found',
            ];
            return response()->json($response, $e->getStatusCode());
        });
    }

    
}

