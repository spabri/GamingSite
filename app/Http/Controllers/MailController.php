<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{   
    public function contattaci(){
        return view('mail.contattaci');
    }
    public function submit(Request $request){
        $user= Auth::user();

        $email= $user->email;
        $username= $user->name;
        $description= $request->body;

        Mail::to('mailesempio@mail.it')->send(new ContactMail($email,$username,$description));
        return redirect(route('home'))->with('message','Email inviata con successo!');
    }
}
