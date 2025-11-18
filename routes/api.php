<?php

use App\Http\Controllers\PrintMonitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/print-api', [PrintMonitorController::class, 'store']);

Route::get('/print-test', function(){
    return ['status' => 'API is working'];
});