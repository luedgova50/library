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

Route::get('/', 'InicioController@index');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
// Route::get('', 'AdminController@index');
    /*RUTAS DE PERMISO*/
   Route::get('permiso', 'PermisoController@index')->name('permiso');
   Route::get('permiso/create', 'PermisoController@create')->name('create_permiso');
   Route::post('permiso', 'PermisoController@store')->name('store_permiso');
   Route::get('permiso/{id}/edit', 'PermisoController@edit')->name('edit_permiso');
   Route::put('permiso/{id}', 'PermisoController@update')->name('update_permiso');
   Route::delete('permiso/{id}', 'PermisoController@destroy')->name('destroy_permiso');
   /*RUTAS DEL MENU*/
   Route::get('menu', 'MenuController@index')->name('menu');
   Route::get('menu/create', 'MenuController@create')->name('create_menu');
   Route::post('menu', 'MenuController@store')->name('store_menu');
   Route::get('menu/{id}/edit', 'MenuController@edit')->name('edit_menu');
   Route::put('menu/{id}', 'MenuController@update')->name('update_menu');
   Route::get('menu/{id}/detroy', 'MenuController@destroy')->name('detroy_menu');
   Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('store_orden');
});
