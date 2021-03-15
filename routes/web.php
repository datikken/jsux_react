<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $path = $request->path();

    if($path != 'nova') {
        return view('welcome');
    }
});
