<?php

use App\Http\Controllers\Api\EvaluetionController;
use Illuminate\Support\Facades\Route;

Route::get('/evaluations/{company}', [EvaluetionController::class, 'index']);
Route::post('/evaluations/{company}', [EvaluetionController::class, 'store']);

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});
