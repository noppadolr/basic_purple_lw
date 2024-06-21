<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


require __DIR__.'/auth.php';

// Route::view('login/page','backend.login')->name('login.page');

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


Route::controller(AdminController::class)
->prefix('admin')
->as('admin.')
->group(function(){
    Route::get('/login','LoginPage')->name('login');
});

Route::controller(AdminController::class)
->prefix('admin')
->as('admin.')
->middleware('authen')
->group(function(){
    Route::get('/dashboard','index')->name('dashboard');
});