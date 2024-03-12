<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }
    public function viewRecord()
    {
        // Fetch all student records
        $students = DB::table('students')->get();

        // Count the total number of students
        $totalStudents = count($students);

        // Fetch all teacher records
        $teachers = DB::table('teachers')->get();

        // Count the total number of teachers
        $totalTeachers = count($teachers);

        // Fetch all course records
        $courses = DB::table('courses')->get();

        // Count the total number of teachers
        $totalCourse = count($courses);

        // Fetch all course records
        $batches = DB::table('batches')->get();

        // Count the total number of teachers
        $totalBatch = count($batches);

        // Fetch all course records
        $enrollments = DB::table('enrollments')->get();

        // Count the total number of teachers
        $totalEnrollment = count($enrollments);

        // Fetch all course records
        $payments = DB::table('payments')->get();

        // Count the total number of teachers
        $totalPayment = count($payments);

        return view('home', compact('students', 'totalStudents', 'teachers', 'totalTeachers', 'courses', 'totalCourse', 'batches', 'totalBatch', 'enrollments', 'totalEnrollment', 'payments', 'totalPayment'));
    }
}
