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


Route::get('/ ', function () {
return view('pagina');
});

Route::get('/autenticacao', function () {
return view('login');
})->name('autenticacao');

Route::get('/cadastro', function () {
return view('cadastro');
});

Route::get('/perfil', function () {
return view('perfil');
})->middleware('auth');

Route::get('/desconectar', function () {
	Auth::logout();
	return view('pagina');
});
Route::get('/carrinho', function () {
return view('carrinho');
});

Route::get('/departamentos', 'DepartamentoControlador@index')->middleware('auth');
Route::get('/departamento_cadastrar', 'DepartamentoControlador@create')->middleware('auth');
Route::post('/departamento_salvar', 'DepartamentoControlador@store')->middleware('auth');
Route::get('/departamento_remover/{id}', 'DepartamentoControlador@destroy')->middleware('auth');
Route::get('/departamento_editar/{id}', 'DepartamentoControlador@edit')->middleware('auth');
Route::post('/departamento_atualizar/{id}', 'DepartamentoControlador@update')->middleware('auth');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
