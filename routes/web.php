<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;
use App\Http\controllers\TeacherController;
use App\Http\controllers\CourseController;
use App\Http\controllers\BatchController;
use App\Http\controllers\EnrollmentController;
use App\Http\controllers\PaymentController;



Route::get('/', function () {
    return view('layout');
});


Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/batches', BatchController::class);
Route::resource('/entollments', EnrollmentController::class);
Route::resource('/payments', PaymentController::class);

Route::get('report/report1/{pid}', [ReportController::class, 'report1']);
