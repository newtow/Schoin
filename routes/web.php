<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/adminjadwal', function () {
    return view('admin');
});
Route::get('/adminkelas', function () {
    return view('adminkelas');
});
Route::get('/denah', function () {
    return view('denah');
});
Route::get('/guru', function () {
    return view('guru');
});
Route::get('/adminguru', function () {
    return view('adminguru');
});
Route::get('/adminsiswa', function () {
    return view('adminsiswa');
});
Route::get('/adminevent', function () {
    return view('adminevent');
});
Route::get('/kelas', function () {
    return view('kelas');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('kelas/{slug}', \App\Http\Livewire\KelasDetail::class);
