<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
class SendMail extends Controller
{
    public function send(Request $req){
        \Mail::to("fapaados77@gmail.com")->send(new WelcomeMail());
        echo "OK";
    }

    public function subscribe(Request $request){

    }
}
