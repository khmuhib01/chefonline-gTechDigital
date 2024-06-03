<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\MyTestMail;
use App\Mail\ThankYouMail;

class Contact extends Controller
{
    public function index()
    {
        // dd('hello');
        return view('frontend.contact');
    }

    public function mail(Request $request)
    {

        $input = array_map('trim', $request->all());

        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'phone' => 'required|numeric|digits:11',
            'message' => 'required',
        ]);

        // Handle validation failures
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $client_email = $validated['email'];
        $sender_email = 'hello@gtechdigital.co.uk';

        // Send the email
        Mail::to($sender_email)->send(new MyTestMail($validated));

        // Send the thank-you email to the user
        Mail::to($client_email)->send(new ThankYouMail($validated));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}
