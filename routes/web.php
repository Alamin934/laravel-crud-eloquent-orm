<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [StudentController::class, 'create']);
Route::post('/', [StudentController::class, 'store']);
Route::get('/', [StudentController::class, 'index']);

Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('edit/{id}', [StudentController::class, 'update'])->name('update');
Route::get('delete/{id}', [StudentController::class, 'destroy'])->name('delete');
