<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function submit(Request $request){
        $user= Auth::user();

        $email= $user->email;
        $username= $user->name;

        $description= $request->input('body');

        // Mail::to('mailesempio@mail.it')->send(new ContactMail($emailauth,$usernameauth,$description));
    }
}
