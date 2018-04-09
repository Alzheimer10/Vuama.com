<?php

Route::get('/', function () {
    return view('admin.home');
})->name('home');

Route::get('servicios', function(){
    return view('admin.sections.services');
})->name('services');

Route::get('proyectos', function(){
	return view('admin.sections.projects');
})->name('projects');

Route::get('clientes', function(){
	return view('admin.sections.customers');
})->name('customers');