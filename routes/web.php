<?php
Route::view('/','index');

Route::get('/clientes','ClientesController@index');
Route::get('/clientes/novo','ClientesController@create');
Route::post('/clientes','ClientesController@store');
Route::get('/clientes/apagar/{id}','ClientesController@destroy');

Route::get('/produtos/novo','ProdutosController@create');
Route::post('/produtos','ProdutosController@store');
Route::get('/produtos','ProdutosController@index');
Route::get('/produtos/apagar/{id}','ProdutosController@destroy');

Route::get('/pedidos','PedidosController@index');
Route::get('/pedidos/novo','PedidosController@create');
Route::get('/pedidos/{id}','PedidosController@show');
Route::get('/pedidos/remover/{pedido_id}/{produto_id}','PedidosController@destroy');
Route::post('/pedidos','PedidosController@store');
