<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class FormController extends Controller
{
    public function sendEmail(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('sho248t@gmail.com')->send(new ContactFormMail($data));

        return redirect('/')->with('success', 'メールが送信されました。');

    }
}
