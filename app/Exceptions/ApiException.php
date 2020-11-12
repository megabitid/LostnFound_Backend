<?php

namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{

    public function __construct($message, $error_code)
    {
        $this->message = $message;
        $this->error_code = $error_code;
    }
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        return false;
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json(['message'=>$this->message], $this->error_code);
    }
}