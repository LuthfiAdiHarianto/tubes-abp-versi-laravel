<?php

use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/chat', [ChatController::class, 'store']);
Route::post('/orders', [OrderController::class, 'store']);
