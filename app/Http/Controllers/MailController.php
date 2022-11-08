<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function index()
    {
        $email = request()->email;
        $mailData = [
            'title' => 'Bienvenue à EasyGroup'
        ];

        Mail::to($email)->send(new SendMail($mailData));

        return redirect(route('home'));
    }
}
