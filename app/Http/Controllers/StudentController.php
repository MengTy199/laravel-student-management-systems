<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::all();
        return view("student.index", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request) : RedirectResponse
    {
            // Validate the request first
        $validatedData = $request->validated();
        
        if ($validatedData) {
            Student::create($validatedData);
        } else {
            return redirect()->route('student.index');
        }
        return redirect()->route('student.index')->with('create', 'Student has been created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $students = Student::find($id);
        return view("student.show", compact("students"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view("student.edit", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, string $id):RedirectResponse
    {
        if ($request->validated()) {
            Student::find($id)->update($request->all());
        }else{
            return redirect()->route('student.index');
        }
        return redirect()->route('student.index')->with('update' , 'Student has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::find($id)->delete();
        return redirect()->route('student.index')->with('delete', 'Student has been deleted successfully');
    }


}
