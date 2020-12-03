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

Route::get('lista-proveedores', 'ProviderController@getProvider')->name('get.provider');
Route::get('nuevo-proveedor', 'ProviderController@createProvider')->name('create.provider');
Route::post('nuevo-proveedor/guardar', 'ProviderController@storeProvider')->name('store.provider');
Route::get('editar-proveedor/{id}', 'ProviderController@editProvider')->name('edit.provider');
Route::put('editar-proveedor/actualizar/{id}', 'ProviderController@updateProvider')->name('update.provider');
Route::get('proveedor/cambiar-estado/{id}', 'ProviderController@stateProvider')->name('state.provider');

Route::get('lista-clientes', 'ClientController@getClient')->name('get.client');
Route::get('nuevo-cliente', 'ClientController@createClient')->name('create.client');
Route::post('nuevo-cliente/guardar', 'ClientController@storeClient')->name('store.client');
Route::get('editar-cliente/{id}', 'ClientController@editClient')->name('edit.client');
Route::put('editar-cliente/actualizar/{id}', 'ClientController@updateClient')->name('update.client');
Route::get('cliente/cambiar-estado/{id}', 'ClientController@stateClient')->name('state.client');

Route::get('lista-categorias', 'CategoryController@getCategory')->name('get.category');
Route::get('nuevo-categoria', 'CategoryController@createCategory')->name('create.category');
Route::post('nuevo-categoria/guardar', 'CategoryController@storeCategory')->name('store.category');
Route::get('editar-categoria/{id}', 'CategoryController@editCategory')->name('edit.category');
Route::put('editar-categoria/actualizar/{id}', 'CategoryController@updateCategory')->name('update.category');
Route::get('categoria/cambiar-estado/{id}', 'CategoryController@stateCategory')->name('state.category');

Route::get('lista-productos', 'ProductController@getProduct')->name('get.product');
Route::post('nuevo-producto/guardar', 'ProductController@storeProduct')->name('store.product');
Route::get('producto/cambiar-estado/{id}', 'ProductController@stateProduct')->name('state.product');
Route::get('editar-producto/{id}', 'ProductController@editProduct')->name('edit.product');
Route::put('editar-producto/actualizar/{id}', 'ProductController@updateProduct')->name('update.product');

Route::get('lista-marcas', 'BrandController@getBrand')->name('get.brand');
Route::get('marca/cambiar-estado/{id}', 'BrandController@stateBrand')->name('state.brand');
Route::post('nuevo-marca/guardar', 'BrandController@storeBrand')->name('store.brand');
Route::put('editar-marca/actualizar/{id}', 'BrandController@updateBrand')->name('update.brand');

Route::get('lista-unidades', 'UnitController@getUnit')->name('get.unit');
Route::get('unidad/cambiar-estado/{id}', 'UnitController@stateUnit')->name('state.unit');
Route::post('nuevo-unidad/guardar', 'UnitController@storeUnit')->name('store.unit');
Route::put('editar-unidad/actualizar/{id}', 'UnitController@updateUnit')->name('update.unit');

Route::get('lista-sucursales', 'BranchController@getBranch')->name('get.branch');
Route::get('sucursal/cambiar-estado/{id}', 'BranchController@stateBranch')->name('state.branch');
Route::post('nuevo-sucursal/guardar', 'BranchController@storeBranch')->name('store.branch');
Route::put('editar-sucursal/actualizar/{id}', 'BranchController@updateBranch')->name('update.branch');

Route::get('lista-compras', 'PurchaseController@getPurchase')->name('get.purchase');
Route::get('nueva-compra', 'PurchaseController@createPurchase')->name('create.purchase');
Route::post('nuevo-compra/guardar', 'PurchaseController@storePurchase')->name('store.purchase');
Route::get('lista-productos/venta/{id}','PurchaseController@getProduct')->name('product.purchase');
