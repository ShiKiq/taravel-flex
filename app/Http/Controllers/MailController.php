<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\TestMail;

class MailController extends Controller
{


    public function send(){
        Mail::to('test@example.com')
            ->send(new TestMail());
        return 'Email was sent';
    }
}
