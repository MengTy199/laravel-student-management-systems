<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
   Route::resource('/student', StudentController::class);
   Route::resource('/teacher', TeacherController::class);
   Route::resource('/batch', BatchController::class);
   Route::resource('/course', CourseController::class);
   Route::resource('/enrollment', EnrollmentController::class);
   Route::resource('/payment', PaymentController::class);
   Route::resource('/home', HomeController::class);
   Route::get('/home', [HomeController::class, 'viewRecord']);
   Route::get('/report/report1/{pid}', [ReportController::class,'report1']);
});

require __DIR__.'/auth.php';
