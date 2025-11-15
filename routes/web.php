<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatbotController;

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

// 🔥 ROUTE PENTING UNTUK CHATBOT
Route::post('/chatbot', [ChatbotController::class, 'chat']);
