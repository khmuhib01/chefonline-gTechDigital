<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\MyTestMail;

class Contact extends Controller
{
    public function index()
    {
        // dd('hello');
        return view('frontend.contact');
    }

    public function mail(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        $name = $validated['name'];
        $email = $validated['email'];
        $phone = $validated['phone'];
        $message = $validated['message'];

        // Uncomment the line below to see the validated data
        // dd($name . $email . $phone . $message);

        // $title = 'Welcome to the laracoding.com example email';
        // $body = 'Thank you for participating!';

        Mail::to('khmuhibofficial@gmail.com')->send(new MyTestMail($name, $phone));

        return "Email sent successfully!";
    }
}
