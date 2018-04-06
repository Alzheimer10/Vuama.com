<?php

Route::get('/', function () {
    return view('admin.home');
})->name('home');
Route::get('/home', function () {
    return view('admin.home');
})->name('home');

Route::get('servicios', function(){
	return 0;
})->name('services');

Route::get('clientes', function(){
	return 0;
})->name('customers');