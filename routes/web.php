<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\SpiderController;

Route::get('/', [ReactController::class, 'index']);
Route::get('/test', [SpiderController::class, 'test']);

Route::get('/{any}', [ReactController::class, 'index'])
    ->where('any', '(.*)')
    ->middleware('not_admin');
