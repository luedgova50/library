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
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
    Route::get('', 'AdminController@index');
    /*RUTAS DE PERMISO*/
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/create', 'PermisoController@create')->name('create_permiso');
    Route::post('permiso', 'PermisoController@storage')->name('storage_permiso');
    Route::get('permiso/{id}/edit', 'PermisoController@edit')->name('edit_permiso');
    Route::put('permiso/{id}', 'PermisoController@update')->name('update_permiso');
    Route::delete('permiso/{id}', 'PermisoController@destroy')->name('destroy_permiso');
