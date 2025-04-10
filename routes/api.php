<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\TrabajadoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('departamentos',DepartamentosController::class);
Route::post('auth/register',[AuthController::class,'create']);
Route::post('auth/login',[AuthController::class,'login'])-> name('login');

//Route::middleware(['auth:sanctum'])->group(function(){
    Route::apiResource('trabajadores',TrabajadoresController::class);
    Route::get('trabajadores/all',[TrabajadoresController::class,'all']);
    Route::get('trabajadores/departamentos',[TrabajadoresController::class,'TrabajadoresDepartamentos']);

    Route::post('auth/logout',[AuthController::class,'logout']);




//});



