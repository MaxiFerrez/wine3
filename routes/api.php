<?php

use App\Http\Controllers\MensajesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/mensajes', [MensajesController::class, 'index']);
Route::post('/mensajes', [MensajesController::class, 'store']);
Route::delete('/mensajes/{id}', [MensajesController::class, 'destroy']);

//Route::get('mensajes',[MensajesController::class,'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});