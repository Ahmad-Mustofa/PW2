<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/** Jenis Method HTTP:
 * 1. GET= menampilkan halaman
 * 2. POST= mengirim data
 * 3. PUT= meng-update data
 * 4. DELETE= menghapus data
 */
//route baru untuk menampilkan teks 
Route::get('/Hallo/{nama}', function($nama){
    return "Assalamualaikum...$nama";
});


Route::get('admin/dashboard', [DashboardController::class, 'index']);
    
//route::get("Profile", function(){
    //return view("Profile");
//});