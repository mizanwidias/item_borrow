<?php

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
    return view('repair');
});

Route::resource('/home', App\Http\Controllers\HomeController::class)->name('index','home');
Route::resource('/item', App\Http\Controllers\ItemController::class)->name('index','item');
Route::resource('/borrowing', App\Http\Controllers\BorrowingController::class)->name('index','borrowing');
Route::resource('/item_type', App\Http\Controllers\ItemTypeController::class)->name('index','item_type');
Route::resource('/borrowing_report', App\Http\Controllers\BorrowingReportController::class)->name('index','borrowing_report');
Route::resource('/teacher', App\Http\Controllers\TeacherController::class)->name('index','teacher');
Route::resource('/student', App\Http\Controllers\StudentController::class)->name('index','student');


// Login
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'loginProcess'])->name('Auth.loginProcess');
Route::post ('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('Auth.logout');