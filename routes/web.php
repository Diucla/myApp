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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dados', function(){
	return "Texto";
});

Route::get('/versao/{versao?}', function($versao = null){
	return "A versao actual e ".$versao;
});

Route::get('/produto', function(){
	return view('produtos.produto');
});