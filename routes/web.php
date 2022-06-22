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
    return view('landingpage', [
        "title" => "Landing Page",
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/event', function () {
    return view('event', [
        "title" => "Event",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/reviews', function () {
    return view('reviews', [
        "title" => "Reviews",
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login",
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "title" => "Sign Up",
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "title" => "Sign Up",
    ]);
});

Route::get('/registrasi', function () {
    return view('registrasi', [
        "title" => "Registrasi Event",
    ]);
});
//halaman single post
