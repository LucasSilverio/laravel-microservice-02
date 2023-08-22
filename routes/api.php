<?php

use App\Http\Controllers\Api\EvaluetionController;
use Illuminate\Support\Facades\Route;

Route::get('/evaluations/{company}', [EvaluetionController::class, 'index']);

Route::get('/', function(){
    return response()->json(['message' => 'success']);
});
