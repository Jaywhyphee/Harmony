<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\VehicleRegistrationController;

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

Route::group(['prefix' => 'residents', 'as' => 'residents.'], function () {
    Route::get('/', [ResidentController::class, 'index'])->name('index');
    Route::get('/create', [ResidentController::class, 'create'])->name('create');
    Route::post('store', [ResidentController::class, 'store'])->name('store');
    Route::get('/{resident}/show', [ResidentController::class, 'show'])->name('show');
    Route::get('/{resident}/edit', [ResidentController::class, 'edit'])->name('edit');
    Route::put('/{resident}/update', [ResidentController::class, 'update'])->name('update');
    Route::delete('/{resident}/destroy', [ResidentController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'vehicles', 'as' => 'vehicles.'], function () {
    Route::get('/', [VehicleRegistrationController::class, 'index'])->name('index');
    Route::get('/create', [VehicleRegistrationController::class, 'create'])->name('create');
    Route::post('store', [VehicleRegistrationController::class, 'store'])->name('store');
    Route::get('/{vehicle}/show', [VehicleRegistrationController::class, 'show'])->name('show');
    Route::get('/{vehicle}/edit', [VehicleRegistrationController::class, 'edit'])->name('edit');
    Route::put('/{vehicle}/update', [VehicleRegistrationController::class, 'update'])->name('update');
    Route::delete('/{vehicle}/destroy', [VehicleRegistrationController::class, 'destroy'])->name('destroy');
});

