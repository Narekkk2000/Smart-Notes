<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ai\AiController;

Route::post('/ai/chat', [AiController::class, 'process']);
