<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailResetPassword;
use App\Mail\SendMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\returnArgument;
use Illuminate\Support\Str;

class EmailController extends Controller
{
    function testemail(){
        $subject = "Test Email Subject";
        $to_name = "Margareth";
        $to_email = env("MAIL_FROM_ADDRESS");
        $message = "Hello this is test email";
        $sent = Mail::to($to_email)->send(new SendMail($subject, $to_name, $message));
        if(Mail::failures()){
            return response()->json(['message'=>'Send Email Error', 'errors'=>Mail::failures()], );
        } else {
            return response()->json(['message'=>"Test email sent."]);
        }
    }
}
