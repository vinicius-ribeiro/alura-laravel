<?php

Route::get('/', function(){
	return '<h1>Listagem de Prodtutos</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');