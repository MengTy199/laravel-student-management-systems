<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $batches = Batch::all();
        return view("batch.index", compact("batches"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::pluck('name','id');
        return view('batch.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBatchRequest $request)
    {
        if ($request->validated()) {
            Batch::create($request->all());
        } else {
            return redirect()->route('batch.index');
        }
        return redirect()->route('batch.index')->with('create', 'Batch has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $batch = Batch::find($id);
        return view("batch.show", compact("batch"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::pluck('name','id');
        $batch = Batch::find($id);
        return view("batch.edit", compact("courses","batch")); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatchRequest $request, string $id)
    {
        
        if ($request->validated()) {
            Batch::find($id)->update($request->all());
        }else{
            return redirect()->route('batch.index');
        }
        return redirect()->route('batch.index')->with('update' , 'Batch has been updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::find($id)->delete();
        return redirect()->route('batch.index')->with('success','Company has been deleted successfully');
    }
}
