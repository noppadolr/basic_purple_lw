<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



