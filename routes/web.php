<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/test', function(){
    return "Welcome to Laravel";
    });

Route::get('/sup', function(){
    $conn = "Framework Laravel.";
    return compact('conn');
});
Route::get('/index2' , [IndexController::class, 'index']);

Route::get('/tambah', function () {
    return view('tambahSiswa');
});

Route::get('/edit' , [IndexController::class, 'edit']);

Route::put('/update/{nis}', 'App\Http\Controllers\IndexController@update');

Route::delete('/delete/{nis}', [IndexController::class, 'delete'])->name('siswa.delete');

Route::post('/add' , [IndexController::class, 'add']);

Route::get('/list' , [IndexController::class, 'list'])->name('listSiswa');


