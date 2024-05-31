<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('learn.department.index');
    }

    public function create()
    {
        return view('learn.department.create');
    }

    public function edit () {
        return view('learn.department.edit');
    }
}
