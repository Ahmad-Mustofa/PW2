<?php

use App\Http\Controllers\CourseConteroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




// routing profil

Route::get('admin/dashboard', [DashboardController::class, 'index']);

Route::get('admin/student', [StudentController::class, 'index']);

Route::get('admin/course', [CourseConteroller::class, 'index']);

// route untuk menampilkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// route untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);

// route untuk menampilkan halaman edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// route untuk menyimpan hasil update student
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

// route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);
