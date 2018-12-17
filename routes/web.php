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


/*Route::get('/ ', function () {
return view('pagina');
});*/

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


Route::get('/categorias', 'CategoriaControlador@index')->middleware('auth');
Route::get('/categoria_cadastrar', 'CategoriaControlador@create')->middleware('auth');
Route::post('/categoria_salvar', 'CategoriaControlador@store')->middleware('auth');
Route::get('/categoria_remover/{id}', 'CategoriaControlador@destroy')->middleware('auth');
Route::get('/categoria_editar/{id}', 'CategoriaControlador@edit')->middleware('auth');
Route::post('/categoria_atualizar/{id}', 'CategoriaControlador@update')->middleware('auth');

Route::get('/produtos', 'ProdutoControlador@index')->middleware('auth');
Route::get('/produto_cadastrar', 'ProdutoControlador@create')->middleware('auth');
Route::post('/produto_salvar', 'ProdutoControlador@store')->middleware('auth');
Route::get('/produto_remover/{id}', 'ProdutoControlador@destroy')->middleware('auth');
Route::get('/produto_editar/{id}', 'ProdutoControlador@edit')->middleware('auth');
Route::post('/produto_atualizar/{id}', 'ProdutoControlador@update')->middleware('auth');
Route::get('/', 'ProdutoControlador@listarprodutos');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
