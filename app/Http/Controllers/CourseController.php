<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $courses = Course::all();
        return view("course.index", compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $teachers = Teacher::pluck('name','id');
        return view('course.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        if ($request->validated()) {
            Course::create($request->all());
        } else {
            return redirect()->route('course.index');
        }
        return redirect()->route('course.index')->with('create', 'Course has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $courses = Course::find($id);
        return view("course.show", compact("courses"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::pluck('name','id');
        $course = Course::find($id);
        return view("course.edit", compact("course","teachers")); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, string $id)
    {
        
        if ($request->validated()) {
            Course::find($id)->update($request->all());
        }else{
            return redirect()->route('course.index');
        }
        return redirect()->route('course.index')->with('update' , 'Courese has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::find($id)->delete();
        return redirect()->route('course.index')->with('success','Company has been deleted successfully');
    }
}
