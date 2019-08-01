<?php

namespace App\Http\Controllers\Web;

use App\Jobs\SendEmailJob;
use App\Mail\NewsLetterNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class EmailController extends Controller
{
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return back();
        }
        $email = $validator->validate()['email'];
        $subject = 'Welcome to myblog';
        SendEmailJob::dispatch($email, new NewsLetterNotification($email, $subject));
        return back();
    }
}
