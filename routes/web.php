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
Route::namespace('CustomerWeb')->group(function () {
  Route::group(['middleware' => 'is.customer'], function(){
    Route::get('/','AppController@home')->name('home');
  });
  Route::get('/contacto','AppController@contact')->name('contact');
  Route::get('/nosotros','AppController@about')->name('about');
  Route::get('/como_funciona','AppController@howWork')->name('howWork');
  Route::get('/ayuda','AppController@help')->name('help');
  Route::get('/politica_y_privacidad','AppController@privacy_policy')->name('privacy_policy');
  Route::get('/proveedores','AppController@providers')->name('providers');
  Route::get('/trabajo','AppController@jobs')->name('jobs');
  Route::get('/oficinas','AppController@offices')->name('offices');
});

  
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'CustomerAuth\LoginController@login');
Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'CustomerAuth\RegisterController@register');

Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
