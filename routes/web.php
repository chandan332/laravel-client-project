<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/services', function (){
    return view('services');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/pricing', function (){
    return view('pricing');
});

Route::get('/copypricing', function (){
    return view('copypricing');
});

Route::get('/refundpolicy', function (){
    return view('refundpolicy');
});

Route::get('/terms&conditions', function (){
    return view('terms');
});

Route::get('/privacypolicy', function (){
    return view('privacypolicy');
});

