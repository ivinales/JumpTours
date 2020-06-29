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
