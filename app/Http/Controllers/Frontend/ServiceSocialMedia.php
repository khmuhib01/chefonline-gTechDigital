<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceSocialMedia extends Controller
{
    public function index()
    {
        return view('frontend.service-social-media');
    }
}
