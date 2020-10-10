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

// JUGADORES
Route::get('/jugadores', 'JugadorController@getAll');
Route::get('/jugadores/{jugador}','JugadorController@show');
Route::post('/jugadores','JugadorController@store');
Route::delete('/jugadores/{id}', 'JugadorController@destroy');
Route::put('/jugadores/{jugador}', 'JugadorController@update');

// PARTIDOS
Route::get('/partidos', 'PartidoController@getAll');
Route::get('/partidos/{id}', 'PartidoController@show');
Route::post('/partidos', 'PartidoController@store');
Route::delete('/partidos/{id}', 'PartidoController@destroy');
Route::put('/partidos/{partido}', 'PartidoController@edit');
