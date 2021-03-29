<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReactController;
use App\Http\Controllers\SpiderController;
use App\Http\Controllers\TestController;

Route::get('/', [ReactController::class, 'index']);
Route::get('/parse', [SpiderController::class, 'test']);
Route::get('/test', [TestController::class, 'test']);

Route::get('/testbot', function () {
    $update = json_decode(file_get_contents('php://input'));
    $update->method = array();
    $update->post_fields = array();
    $update->post_fields[0] = new \stdClass();

    route_requests($update);
    send_response($update);
});

Route::get('/{any}', [ReactController::class, 'index'])
    ->where('any', '(.*)')
    ->middleware('not_admin');
