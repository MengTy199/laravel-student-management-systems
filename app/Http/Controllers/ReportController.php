<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Support\Facades\App;


class ReportController extends Controller{
   public function report1($pid){
    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style= 'display: flex; align-items: ceter; justify-content: center; ' ";
    $print ="<div style: 'margin: 20px; padding 20px;'>";
    $print.="<h1  algin='center'></h1>";
    $print.= "<h1>Payment Receipt</h1>";
    $print.="<hr/>";
    $print.="<p> Receipt No: <b> $pid</b></p>";
    $print.="<p>Date : <b> $payment->paid_date </b></p>";
    $print.="<p>Enrollment : <b>". $payment->enrollment->enroll_no ."</b></p>";
    $print.="<p>Course Name : <b>". $payment->enrollment->batch->course->name ."</b></p>";
    $print.="<p>Teacher Name : <b>". $payment->enrollment->batch->course->teacher->name ."</b></p>";

    $print.="<p>Student Name : <b>". $payment->enrollment->student->name ."</b></p>";
    
    
    $print.="<hr/>";
    $print.="<table style = 'width: 100%;'>";

    $print.="<tr>";
    $print.="<td>Batch</td>";
    $print.="<td>Amount</td>";
    $print.="</tr>";

    $print.="<tr>";
    $print.="<td> <h3>" . $payment->enrollment->batch->name . "</h3></td>";
    $print.="<td> <h3>$ " . $payment->amount . "</h3></td>";
    $print.="</tr>";

    $print.="</table>";

    $print.="<hr/> <br/>";

    $print.="<p style ='text-align: right;'> Printed Date : <b> " . date('Y-M-d') . "</b></p>";

    $print.="</div>";
    $print.="</div>";

    $pdf->loadHTML($print);
    return $pdf->stream('receipt.pdf', array('Attachment' => 0));
   }
    
}

