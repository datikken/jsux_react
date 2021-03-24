<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReactController;

Route::get('/', [ReactController::class, 'index']);

Route::get('/{any}', [ReactController::class, 'index'])
    ->where('any', '(.*)')
    ->middleware('not_admin');
