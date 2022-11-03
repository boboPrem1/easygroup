<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function index() {
        $mailData = [
            'title' => 'Bienvenue à EasyGroup'
        ];

        Mail::to('directionebouf@gmail.com')->send(new SendMail($mailData));

        return redirect(route('home'));
    }
}
