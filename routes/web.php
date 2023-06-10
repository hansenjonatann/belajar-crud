<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;

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

Route::get('/', [pegawaiController::class , 'index']);

Route::get('/daftar' , function() {
    return view('daftar');
});
Route::post('/register', [pegawaiController::class , 'regist']);
Route::get('/editData/{id}', [pegawaiController::class , 'editData']);
Route::post('/updateData/{id}', [pegawaiController::class , 'updateData']);
Route::get('/delete/{id}', [pegawaiController::class , 'delete']);


Route::get('/about', function() {
    return view('about');
});
