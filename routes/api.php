<?php

use App\Http\Controllers\PartidoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//MOSTRAR TODOS LOS JUGADORES
Route::get('/jugadores', 'JugadorController@index');

// MOSTRAR JUGADOR
Route::get('/jugadores/{jugador}','JugadorController@show');

// AÑADIR JUGADOR
Route::post('/jugadores','JugadorController@store');

// AÑADIR PARTIDO
Route::post('/partidos', 'PartidoController@store');

// EDITAR PARTIDO
Route::put('/partidos/{partido}', 'PartidoController@edit');
