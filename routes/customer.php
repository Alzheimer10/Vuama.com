<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);
    return view('customer.home');
})->name('home');

Route::namespace('CustomerWeb')->group(function () {
	Route::get('/tipo_usuario','CustomerController@customer_type')->name('customer_type');
	Route::group(['middleware' => 'is.customer'], function()
	{
		Route::get('/mi_cuenta','CustomerController@my_account')->name('my_account');
		Route::get('/directorio','CustomerController@directory')->name('directory');
		Route::get('/solicitar','CustomerController@solicit')->name('solicit');

		Route::get('/perfil/{id}','CustomerController@perfil')->name('perfil');
		// Route::post('/updatePassword','PerfilController@updatePassword')->name('updatePassword');

		Route::get('/proyecto/{id}','ProjectController@show')->name('project.show');
		// Route::get('/proyectos/{services}','ProjectController@projectsServices')->name('projects_services');

	});
});

