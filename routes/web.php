<?php

use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
});

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('home.admin');
    })->name('index');

    Route::resource('users', UserController::class);
    Route::resource('conferences', ConferenceController::class);
});
