<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home/index');
});

Route::get('/client', function () {
    return view('home/client');
})->name('home.client');

Route::get('/employee', function () {
    return view('home/employee');
})->name('home.employee');

Route::get('/admin', function () {
    return view('home/admin');
})->name('home.admin');