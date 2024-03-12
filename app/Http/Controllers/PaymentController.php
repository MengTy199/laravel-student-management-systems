<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $payments = Payment::all();
        return view("payment.index",compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payment.create', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        if ($request->validated()) {
            Payment::create($request->all());
        } else {
            return redirect()->route('payment.index');
        }
        return redirect()->route('payment.index')->with('create', 'Payment has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $payment = Payment::find($id);
        return view("payment.show", compact("payment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = Payment::find($id);
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view("payment.edit", compact("payment", 'enrollments')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, string $id)
    {
        if ($request->validated()) {
            Payment::find($id)->update($request->all());
        }else{
            return redirect()->route('payment.index');
        }
        return redirect()->route('payment.index')->with('update' , 'Payment has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::find($id)->delete();
        return redirect()->route('payment.index')->with('success','Company has been deleted successfully');
    }
}
