<?php

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

Route::get('/', 'noticiasController@index');

Route::get('nova_noticia', 'noticiasController@create');

Route::post('salvar_noticia', 'noticiasController@store' );

Route::get('noticia_gestao','noticiasController@apresentarTabelaGestao');

Route::get('colocar_invisivel/{id}','noticiasController@colocarInvisivel');

Route::get('colocar_visivel/{id}','noticiasController@colocarVisivel');

Route::get('eliminar_noticia/{id}','noticiasController@destroy');

Route::get('editar_noticia/{id}','noticiasController@edit');

Route::post('atualizar_noticia/{id}','noticiasController@update');