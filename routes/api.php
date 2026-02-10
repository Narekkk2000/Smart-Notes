<?php

use Illuminate\Http\Request;
use App\Ai\Agents\NoteAssistant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ai\AiController;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::post('/ai/chat', [AiController::class, 'chat']);
Route::post('/ai/summarize', [AiController::class, 'summarize']);
