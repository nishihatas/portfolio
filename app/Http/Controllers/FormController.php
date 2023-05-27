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
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('nishihata@infinity-oo.com')->send(new ContactFormMail($data));

        return response()->json(['success' => true]);

    }
}
