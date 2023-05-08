<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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
    return view('template.main');
});


//route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash');

//route school
Route::get('/school', [SchoolController::class, 'index'])->name('school.index');
Route::get('/school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('/school/store', [SchoolController::class, 'store'])->name('school.store');
Route::get('/school/edit/{id}', [SchoolController::class, 'edit'])->name('school.edit');
Route::put('/school/update/{id}', [SchoolController::class, 'update'])->name('school.update');
Route::get('/school/destroy/{id}', [SchoolController::class, 'destroy'])->name('school.destroy');
//route student
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
