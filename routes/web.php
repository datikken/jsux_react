<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\SpiderController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BotController;

Route::get('/', [ReactController::class, 'index']);
Route::get('/parse', [SpiderController::class, 'test']);
Route::get('/test', [TestController::class, 'test']);

Route::get('/{any}', [ReactController::class, 'index'])
    ->where('any', '(.*)')
    ->middleware('not_admin');
