<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomSoftwareDevelopment extends Controller
{
    public function index()
    {
        return view('frontend.custom-software-development');
    }
}
