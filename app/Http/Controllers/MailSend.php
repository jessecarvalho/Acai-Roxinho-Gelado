<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSend extends Controller
{
    public function send(Request $request)
    {
        $user = new \stdClass();
        $user->name = $request->name;
        $user->email = env("MAIL_TO_ADDRESS");
        $user->emailFrom = $request->email;
        $user->tel = $request->tel;
        $user->assunto = $request->assunto;
        $user->mensagem = $request->mensagem;
        Mail::send(new \App\Mail\newEmail($user));
        return view("displayEmailSend");
    }
}
