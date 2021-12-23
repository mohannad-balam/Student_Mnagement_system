<?php

use App\Http\Controllers\StudentController;
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

Route::group(['prefix' => 'student'], function(){
    Route::get('/', [StudentController::class, 'index'])->name('indexRoute');
    Route::get('/show/{id}', [StudentController::class, 'show'])->name('showRoute');
    Route::get('/create', [StudentController::class, 'create'])->name('createRoute');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('editRoute');
    Route::post('/store', [StudentController::class, 'store'])->name('storeRoute');
    Route::post('/update/{id}', [StudentController::class, 'update'])->name('updateRoute');
    Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('deleteRoute');
});
