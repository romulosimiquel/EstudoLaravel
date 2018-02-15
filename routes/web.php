<?php

Route::get('/painel/servicos/tests', 'Painel\ServicoController@tests');
Route::resource('/painel/servicos', 'Painel\ServicoController');

Route::namespace('Site')->group(function() {
	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');

	Route::get('/categoria/{id?}', 'SiteController@categoria');
	Route::get('/categoriaOP/{id?}', 'SiteController@categoriaOp');
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
	Route::get('/users', function(){
		return 'Users';
	});

	Route::get('/financeiro', function(){
		return 'Financeiro';
	});

	Route::get('/', function(){
		return 'Dashboard';
	});
});

Route::get('/login', function(){
	return '#form login';
});

Route::get('/categoria/{idCat?}', function($idCat = ''){
	return "Posts da categoria {$idCat}";
});

Route::get('/nome/nome2/nome7', function(){
	return 'Rota grande';
})->name('rota.nomeada');

Route::any('/any', function(){
	return 'Rota any';
});

Route::match(['get', 'post'], '/match', function(){
	return 'Route match';
});

Route::post('/post', function(){
	return 'Route post';
});*/



