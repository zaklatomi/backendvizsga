<?php

use App\Http\Controllers\SzoController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/szavak',[SzoController::class,'index']);
Route::get('/szavak/tema',[SzoController::class,'show']);
Route::get('/tema',[TemaController::class,'index']);

