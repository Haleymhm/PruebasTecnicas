<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tareas', 'TareaController@index');
Route::post('/tareas', 'TareaController@store');
Route::get('/tareas/{id}', 'TareaController@show');
Route::put('/tareas/{id}', 'TareaController@update');
Route::delete('/tareas/{id}', 'TareaController@destroy');

Route::get('/usuarios', 'UsuarioController@index');
Route::post('/usuarios', 'UsuarioController@store');
Route::get('/usuarios/{id}', 'UsuarioController@show');