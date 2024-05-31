<?php

namespace App\Http\Controllers\Learn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('learn.person.index');
    }

    public function create()
    {
        return view('learn.person.create');
    }

    public function edit()
    {
        return view('learn.person.edit');
    }

    public function delete()
    {
        return "delete";
    }
}
