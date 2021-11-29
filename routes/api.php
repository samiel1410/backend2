<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcuacionController;
use App\Http\Controllers\DerivadaController;
use App\Http\Controllers\TablaController;
use App\Http\Controllers\Test;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ecuacion/{a?}/{b?}/{c?}', [EcuacionController::class,'ecuacion']);
//derivadas
//grado1
Route::get('/derivada1G/{basex2?}/{basex1?}/{basex0?}', [DerivadaController::class,'derivadaPriGrado']);
 //grado2
Route::get('/derivada2G/{basex2?}/{basex1?}/{basex0?}', [DerivadaController::class,'derivadaSegGrado']);
//grado3
Route::get('/derivada3G/{basex3?}/{basex2?}/{basex1?}/{basex0?}', [DerivadaController::class,'derivadaTerGrado']);
//grado34
Route::get('/derivada4G/{basex4?}/{basex3?}/{basex2?}/{basex1?}/{basex0?}', [DerivadaController::class,'derivadaCuaGrado']);
//tabla de valores
//grado1
Route::get('/primerGrado/{a?}/{b?}', [TablaController::class,'primerGrado']);
//grado 2
Route::get('/segundoGrado/{a?}/{b?}/{c?}', [TablaController::class,'segundoGrado']);
//grado3
Route::get('/tercerGrado/{a?}/{b?}/{c?}/{d?}', [TablaController::class,'tercerGrado']);
Route::get('/suma', [EcuacionController::class,'suma']);
 
