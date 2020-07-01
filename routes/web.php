<?php

use Illuminate\Support\Facades\Route;

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


//GENERAL
Route::get('/', function () {
    return view('presentacion.index');
});
Route::get('/about', function () {
    return view('presentacion.about');
});
Route::get('/contact', function () {
    return view('presentacion.contact');
});

Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
*/
// USUARIO
Route::get('/configuracion', 'UserController@config')->name('config');
Route::get('/perfil/{id}', 'UserController@profile')->name('profile');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');

//EMPRESAS
Route::get('/registrar', 'BusinessController@create')->name('registerBusiness');
Route::post('/storeBusiness', 'BusinessController@store')->name('storeBusiness');
Route::get('/business', 'BusinessController@index')->name('business');
Route::get('/perfilBusiness/{id}', 'BusinessController@profileBusiness')->name('profileBusiness');
Route::get('/business/logo/{filename}', 'BusinessController@getLogo')->name('business.logo');

//IMAGEN
Route::get('/subir-imagen/{id}', 'ImageController@create')->name('image.create');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/image/file/{filename}', 'ImageController@getImage')->name('image.file');
Route::get('/imagen/{id}', 'ImageController@detail')->name('image.detail');






