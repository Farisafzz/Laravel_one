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

Route::get('/registrasi', function () {
    return view('register');
});

Route::get('/registrasi', [RegistrationController::class, 'showForm'])->name('registrasi.form');
Route::post('/registrasi', [RegistrationController::class, 'store'])->name('registrasi.store');

Route::get('/registrasi/data', [RegistrationController::class, 'showData'])->name('registrasi.data');

Route::get('/registrasi/edit/{id}', [RegistrationController::class, 'edit'])->name('registrasi.edit');
Route::put('/registrasi/update/{id}', [RegistrationController::class, 'update'])->name('registrasi.update');
Route::delete('/registrasi/delete/{id}', [RegistrationController::class, 'delete'])->name('registrasi.delete');



