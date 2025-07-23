<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('index');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/starter-page', function () {
    return view('service-details');
});
Route::get('/portofolio-page', function () {
    return view('portofolio-details');
});

Route::get('/starter-page', function () {
    return view('starter-page');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/registrasi', [RegistrationController::class, 'showForm'])->name('registrasi.form');

Route::post('/registrasi', [RegistrationController::class, 'store'])->name('registrasi.store');