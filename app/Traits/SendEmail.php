<?php

namespace App\Traits;

use App\Exceptions\ApiException;
use App\Jobs\SendEmail as SendEmailAsync;
use Illuminate\Support\Facades\Mail;

trait SendEmail {
    public static function sync($user, $email){
        Mail::to($user->email)->send($email);
        if (Mail::failures()) {
            throw new ApiException('Send Email Failed', 502);
        }
    }
    public static function async($user, $email) {
        dispatch(new SendEmailAsync($user, $email));
    }
}