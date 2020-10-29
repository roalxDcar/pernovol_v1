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
    return redirect()->route('login');
});

Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Ingresar al sistema (Restricción)
Route::post('login', 'Auth\LoginController@login_attemps')->name('login_attemps');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('lista-proveedor', 'ProviderController@getProvider')->name('get.provider');
Route::get('nuevo-proveedor', 'ProviderController@createProvider')->name('create.provider');
Route::post('nuevo-proveedor/guardar', 'ProviderController@storeProvider')->name('store.provider');
Route::get('editar-proveedor/{id}', 'ProviderController@editProvider')->name('edit.provider');
Route::put('editar-proveedor/actualizar/{id}', 'ProviderController@updateProvider')->name('update.provider');
