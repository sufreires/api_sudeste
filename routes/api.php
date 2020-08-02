<?php

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

Route::post('auth/login', 'API\\AuthController@login');

Route::group(['middleware' => ['apiJwt']], function (){
    Route::get('users', 'Api\\UserController@index');
    Route::apiResource('produtos', 'Api\\ProdutoController');
    Route::apiResource('culturas', 'Api\\CulturaController');
    Route::apiResource('pragas', 'Api\\PragaController');
    Route::apiResource('relacoes', 'Api\\RelacoesController');
    Route::apiResource('relatorio', 'Api\\RelatorioController');
});




/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
