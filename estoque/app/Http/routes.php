<?php

Route::get('/', function(){
	return '<h1>Listagem de Prodtutos</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');