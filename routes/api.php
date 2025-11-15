<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatbotController;

// POST /api/chatbot
Route::post('/chatbot', [ChatbotController::class, 'ask']);