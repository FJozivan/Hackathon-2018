<?php



$this->get('/', 'DenunciaController@index')->name('denuncia');
$this->get('/denunciar', 'DenunciaController@cadDenuncia')->name('cadDenuncia');
Route::post('/denuncias/criar', 'DenunciaController@create')->name('create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
