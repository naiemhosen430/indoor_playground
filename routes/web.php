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
    return view('frontend.home');
});

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});


Route::get('/class', function () {
    return view('frontend.class');
});

Route::get('/teachers', function () {
    return view('frontend.teachers');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/testimonials', function () {
    return view('frontend.testimonials');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/404', function () {
    return view('frontend.404');
});

Route::get('/events', function () {
    return view('frontend.events');
});

Route::get('/singleevent', function () {
    return view('frontend.singleevent');
});

Route::get('/news', function () {
    return view('frontend.news');
});

Route::get('/news', function () {
    return view('frontend.news');
});

Route::get('/single-news', function () {
    return view('frontend.single-news');
});
