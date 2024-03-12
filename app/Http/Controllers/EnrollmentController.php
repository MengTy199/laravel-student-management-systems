<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $enrollments = Enrollment::all();
        return view("enrollment.index", compact("enrollments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollment.create', compact('batches','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request)
    {
        if ($request->validated()) {
            Enrollment::create($request->all());
        } else {
            return redirect()->route('enrollment.index');
        }
        return redirect()->route('enrollment.index')->with('create', 'Enrollment has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $enrollment = Enrollment::find($id);
        return view("enrollment.show", compact("enrollment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollment = Enrollment::find($id);
        // return view("enrollment.edit", compact("enrollment")); 

        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollment.edit', compact('batches','students', 'enrollment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, string $id)
    {
        
        if ($request->validated()) {
            Enrollment::find($id)->update($request->all());
        }else{
            return redirect()->route('enrollment.index');
        }
        return redirect()->route('enrollment.index')->with('update' , 'Enrollment has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::find($id)->delete();
        return redirect()->route('enrollment.index')->with('success','Enrollment has been deleted successfully');
    }
}
