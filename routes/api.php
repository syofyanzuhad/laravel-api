<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('time', function () {
    return date('Y-m-d H:i:s');
});
