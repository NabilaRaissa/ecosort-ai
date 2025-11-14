<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot');