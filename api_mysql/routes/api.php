<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dhtController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/dht',[dhtController::class, 'index']);
Route::post('/dht/',[dhtController::class, 'store']);


// Route::post('/dht/', function (Request $request) {
//     return response()->json(['OK' => $request->all()]);
// });