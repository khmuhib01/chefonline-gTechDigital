<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('course_models')->get();

        // dd($courses);
        return view('learn.course.index', compact('courses'));
    }

    public function create()
    {
        // dd($request);
        return view('learn.course.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2|unique:course_models',
            'status' => 'required|boolean',
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
        $status = $validated['status'];

        // Perform your logic here

        DB::table('course_models')->insert([
            'name' => $name,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Course created successfully!');
    }



    public function edit(Request $request, $id)
    {
        // dd($id);
        // $course = DB::table('course_models')->where($id);
        // dd($course);

        $course = DB::table('course_models')->where('id', $id)->first();
        return view('learn.course.edit', compact('course'));
    }


    public function update(Request $request, $id)
    {
        // Retrieve the specific course by ID
        $course = DB::table('course_models')->where('id', $id)->first();

        if (!$course) {
            return redirect()->back()->with('error', 'Course not found!');
        }

        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2|unique:course_models,name,' . $id,
            'status' => 'required|boolean',
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
        $status = $validated['status'];

        // Update the specific course
        DB::table('course_models')->where('id', $id)->update([
            'name' => $name,
            'status' => $status,
            'updated_at' => now(),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Course updated successfully!');
    }

    public function delete(Request $request, $id)
    {
        DB::table('course_models')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Course deleted successfully!');
    }
}
