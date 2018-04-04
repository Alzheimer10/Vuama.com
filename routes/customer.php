<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);
    return view('customer.home');
})->name('home');

Route::namespace('CustomerWeb')->group(function () {
	Route::get('/mi_cuenta','CustomerController@my_account')->name('my_account');
	Route::get('/directorio','CustomerController@directory')->name('directory');
	Route::get('/solicitar','CustomerController@solicit')->name('solicit');
});

