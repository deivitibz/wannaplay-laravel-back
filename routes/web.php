<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    if(!session()->has('data')){
        return redirect('/login');
    } else {
        return view('home');
    }
}); */

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partidos', 'PartidoController@index')->name('partidos');
Route::get('/jugadores','JugadorController@index')->name('jugadores');
Route::get('/admin',function(){
    return view('admin');
})->name('jugadores');


Route::get('users/{id}', function ($id) {

});
asdf asdf
asdf
asdf

/* Route::get('/partidos', 'PartidoController@index')->middleware('auth');

Route::get('/jugadores', 'JugadorController@index')->middleware('auth'); */

//Route::post('partidos', 'PartidoController@update')->name('partidos');

