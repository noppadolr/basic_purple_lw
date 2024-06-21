<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;



require __DIR__.'/auth.php';

Route::middleware('authen')->group(function(){

});