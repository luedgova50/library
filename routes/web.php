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

Route::get('/', 'InicioController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
   Route::get('', 'AdminController@index');
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
   /*RUTAS ROL*/
   Route::get('rol', 'RolController@index')->name('rol');
   Route::get('rol/create', 'RolController@create')->name('create_rol');
   Route::post('rol', 'RolController@store')->name('store_rol');
   Route::get('rol/{id}/edit', 'RolController@edit')->name('edit_rol');
   Route::put('rol/{id}', 'RolController@update')->name('update_rol');
   Route::delete('rol/{id}', 'RolController@destroy')->name('destroy_rol');
    /*RUTAS MENU_ROL*/
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@store')->name('store_menu_rol');
    /*RUTAS PERMISO_ROL*/
    Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
    Route::post('permiso-rol', 'PermisoRolController@store')->name('store_permiso_rol');
});
