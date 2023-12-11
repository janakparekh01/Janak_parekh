<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\blogController;

Route::get('/blog', function () {
    return view('blog/index'); 
});



Route::get('/blog',[blogController::class,'create']);
Route::post('/blog',[blogController::class,'store']);
