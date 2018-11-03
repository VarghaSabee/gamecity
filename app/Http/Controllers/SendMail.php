<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use App\Subscribers;
class SendMail extends Controller
{
    public function send(Request $req){
        \Mail::to("fapaados77@gmail.com")->send(new WelcomeMail());
        echo "OK";
    }

    public function subscribe(Request $request){
        if (filter_var( $request->email, FILTER_VALIDATE_EMAIL )){
            $subcriber = new Subscribers();
            $subcriber->email = $request->input("email");
            $subcriber->save();
            \Mail::to($subcriber)->send(new WelcomeMail());
        }
        return redirect()->back()->withInput();
    }
}
