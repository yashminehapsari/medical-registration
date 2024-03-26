<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
Route::post('/patient', [PatientController::class, 'store'])->name('patient.store');
Route::get('/patient/{patient}/edit', [PatientController::class, 'edit'])->name('patient.edit');
Route::put('/patient/{patient}/update', [PatientController::class, 'update'])->name('patient.update');
Route::delete('/patient/{patient}/delete', [PatientController::class, 'delete'])->name('patient.delete');
