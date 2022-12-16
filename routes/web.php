<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('mensajes', [MensajesController::class,'index']);
//Route::get('/contacto', [formularioController::class, 'index'])->name('contacto.index');

/* Route::resource('cosechas',CosechaController::class); */
