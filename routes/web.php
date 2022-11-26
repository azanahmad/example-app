<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
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

Route::get('/flight/', [FlightController::class,'display'])->name('flight.index');
Route::get('/flight/create', [FlightController::class,'create'])->name('flight.create');
Route::get('/flight/{id}/edit/', [FlightController::class,'edit'])->name('flight.edit');
Route::get('/flight/{id}/delete/', [FlightController::class,'delete'])->name('flight.delete');
Route::post('/flight/{id}/update/', [FlightController::class,'update'])->name('flight.update');
Route::post('/flight/save', [FlightController::class,'save'])->name('flight.save');
Route::get('test', [FlightController::class,'test']);

Route::get('/', [\App\Http\Controllers\Controller::class,'index']);

