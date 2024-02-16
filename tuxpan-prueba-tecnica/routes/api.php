<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\API\UsuarioController;

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

Route::post('/register', [UsuarioController::class, 'register']);
Route::post('/login', [UsuarioController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/tareas', 'TareaController@index');
    Route::post('/tareas', 'TareaController@store');
    Route::get('/tareas/{id}', 'TareaController@show');
    Route::put('/tareas/{id}', 'TareaController@update');
    Route::delete('/tareas/{id}', 'TareaController@destroy');

    Route::get('/usuarios', 'UsuarioController@index');
    Route::post('/usuarios', 'UsuarioController@store');
    Route::get('/usuarios/{id}', 'UsuarioController@show');
    Route::get('/logout', 'UsuarioController@logout');
});
