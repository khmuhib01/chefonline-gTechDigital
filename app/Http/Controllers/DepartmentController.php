<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('learn.department.index', compact('departments'));
    }

    public function create()
    {
        return view('learn.department.create');
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

        DB::table('departments')->insert([
            'name' => $name,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Department created successfully!');
    }

    public function edit(Request $request, $id)
    {
        $department = DB::table('departments')->where('id', $id)->first();

        return view('learn.department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {

        // $department = DB::table('departments')->where('id', $id)->first();
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

        DB::table('departments')->where('id', $id)->update([
            'name' => $name,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Department updated successfully!');
    }

    public function delete($id)
    {
        DB::table('departments')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Department deleted successfully!');
    }
}
