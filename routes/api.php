<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\produtoController;
use App\Http\Controllers\transactionController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'categoria' => categoriaController::class
]);
Route::apiResources([
    'usuario' => usuarioController::class
]);
Route::apiResources([
    'produto' => produtoController::class
]);
Route::apiResources([
    'transaction' => transactionController::class
]);