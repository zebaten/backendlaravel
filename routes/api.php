<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{DispositivoController, BodegaController, ModeloController, MarcaController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('dispositivos')->group(function(){

    Route::get('/DispositivosPorBodega',[DispositivoController::class,'getDispositivos']);

});

Route::prefix('bodegas')->group(function(){

    Route::get('/ObtenerBodega',[BodegaController::class,'getBodega']);

});

Route::prefix('marcas')->group(function(){

    Route::get('/ObtenerMarcas',[MarcaController::class,'getMarcas']);

});

Route::prefix('modelos')->group(function(){

    Route::get('/ObtenerModelosPorMarca',[ModeloController::class,'getModelosPorMarca']);

});