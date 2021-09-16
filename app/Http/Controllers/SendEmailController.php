<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmail;
use App\Mail\SendUserMail;
use Illuminate\support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmail()
    {
        $email = 'mhamzasulehri143@gmail.com';
        SendEmail::dispatch($email)->delay(now()->addSeconds(30));
        // Mail::to($email)->send(new SendUserMail());

        return redirect()->back()->with('success','Email Send Successfully!!!');
    }
}
