<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SpiderController;

Route::get('/', function (Request $request) {
    return view('welcome');
});

Route::get('/test', [SpiderController::class, 'index'])->name('test');
