<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $teachers = Teacher::all();
        return view("teacher.index", compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        if ($request->validated()) {
            Teacher::create($request->all());
        } else {
            return redirect()->route('teacher.index');
        }
        return redirect()->route('teacher.index')->with('create', 'Teacher has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teachers = Teacher::find($id);
        return view("teacher.show", compact("teachers"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view("teacher.edit", compact("teacher")); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, string $id)
    {
        
        if ($request->validated()) {
            Teacher::find($id)->update($request->all());
        }else{
            return redirect()->route('teacher.index');
        }
        return redirect()->route('teacher.index')->with('update' , 'Teacher has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::find($id)->delete();
        return redirect()->route('teacher.index')->with('success','Company has been deleted successfully');
    }
}
