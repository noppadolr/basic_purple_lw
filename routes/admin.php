<?php


use Illuminate\Support\Facades\Route;

Route::view('test','layouts.admin.master')->name('test');
require __DIR__.'/auth.php';

Route::view('login/page','backend.login')->name('login.page');

// Route::controller(CustomerController::class)
// ->prefix('customer')
// ->as('customer.')
// ->middleware('authen')
// ->group(function () {
//     Route::get('/all', 'index')->name('all');
//     Route::get('/create', 'create')->name('create');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/delete/{id}', 'destroy')->name('delete');
//     Route::get('/edit/{id}','edit')->name('edit');
//     Route::post('/update','update')->name('update');
    

// });