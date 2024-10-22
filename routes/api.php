<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/new-user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
