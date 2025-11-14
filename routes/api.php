<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatbotController;

// Endpoint chatbot POST
Route::post('/chatbot', [ChatbotController::class, 'ask']);