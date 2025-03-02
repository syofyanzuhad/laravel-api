<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/users', function () {
    return App\Models\User::all();
});

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('time', function () {
    return date('Y-m-d H:i:s');
});

Route::get('json', function () {
    return response()->json([
        'name' => 'John Doe',
        'email' => 'user@gmail.com',
    ]);
});
