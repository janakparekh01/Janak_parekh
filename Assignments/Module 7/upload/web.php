<?php

use Illuminate\Support\Facades\Route;

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
    return view('website/index');
});

Route::get('testimonial', function () {
    return view('website/testimonial');
});

Route::get('why', function () {
    return view('website/why');
});

Route::get('contact', function () {
    return view('website/contact');
});

Route::get('shop', function () {
    return view('website/shop');
});

Route::get('signup', function () {
    return view('website/signup');
});




Route::get('/admin-login', function () {
    return view('admin/index');
});

Route::get('/index', function () {
    return view('admin/index');
});

Route::get('/add_cat', function () {
    return view('admin/add_cat');
});

Route::get('/manage_cat', function () {
    return view('admin/manage_cat');
});

Route::get('/add_prod', function () {
    return view('admin/add_prod');
});

Route::get('/manage_prod', function () {
    return view('admin/manage_prod');
});

Route::get('/add_emp', function () {
    return view('admin/add_emp');
});

Route::get('/manage_emp', function () {
    return view('admin/manage_emp');
});

Route::get('/manage_cust', function () {
    return view('admin/manage_cust');
});

Route::get('/manage_feed', function () {
    return view('admin/manage_feed');
});

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload',[adminController::class,'upload']) {
    return view('upload');
});