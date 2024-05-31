<?php

namespace App\Http\Controllers\Learn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PersonController extends Controller
{
    public function index()
    {
        return view('learn.person.index');
    }

    public function create()
    {
        $courses = DB::table('course_models')->get();
        $departments = DB::table('departments')->get();

        return view('learn.person.create', compact('courses', 'departments'));
    }

    public function store(Request $request)
    {

        dd($request->all());

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2|unique:course_models',
            'email' => 'required|email|unique:people|regex:/(.+)@(.+)\.(.+)/i',
            'age' => 'required|integer|min:1|max:3',
            'address' => 'required|string|max:255|min:2',
            'course' => 'required|integer|exists:course_models,id',
            'department' => 'required|integer|exits:departments,id',
        ]);

        // Handle validation failures
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Get validated data
        $validated = $validator->validated();

        $name = $validated['name'];
        $email = $validated['email'];
        $age = $validated['age'];
        $address = $validated['address'];
        $course_id = $validated['course_id'];
        $department_id = $validated['department_id'];
        $uuid = uniqid();

        dd($uuid);


        // Perform your logic here

        DB::table('departments')->insert([
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'address' => $address,
            'course_id' => $course_id,
            'department_id' => $department_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'People created successfully!');

        

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
