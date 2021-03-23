<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SpiderController;

Route::get('/', function(Request $request) {
    if($request->path() != 'nova') {
        return view('welcome');
    }
});

Route::get('/test', [SpiderController::class, 'test'])->name('test');
