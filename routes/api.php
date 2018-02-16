<?php

use Illuminate\Http\Request;

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

Route::middleware(['jwt.auth'])->group(function () {
    Route::get('/', function () {
        return response()->json(['message' => 'SimpleCRM API', 'status' => 'Connected']);;
    });

    Route::resource('ufs', 'UfsController');
    Route::resource('cidades', 'CidadesController');
    Route::resource('conta', 'ContaController');
    Route::resource('fasevenda', 'FaseVendaController');
    Route::resource('oportunidade', 'OportunidadeController');
    Route::resource('contato', 'ContatoController');
    Route::resource('tipoacao', 'TipoAcaoController');
    Route::resource('usuarios', 'UsuarioController');

    Route::get('/', function () {
        return redirect('api');
    });
});

Route::post('auth/login', 'AuthController@authenticate');
