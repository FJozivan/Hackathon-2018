<?php



$this->get('/', 'DenunciaController@index')->name('denuncia');
$this->get('/denunciar', 'DenunciaController@cadDenuncia')->name('cadDenuncia');
$this->get('/aprender', 'DenunciaController@aprendizagem')->name('aprendizagem');
$this->get('/listar', 'DenunciaController@listagem')->name('listagemDenuncia');
$this->get('/bonus', 'DenunciaController@pontos')->name('pontos');
Route::post('/denuncias/criar', 'DenunciaController@create')->name('create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
