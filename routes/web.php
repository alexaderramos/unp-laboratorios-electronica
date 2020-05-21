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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('usuarios','UserController')->only(['index','create','show','edit']);

Route::namespace('Users')->group(function (){ //Rutas para los usuarios
    Route::prefix('usuarios')->group(function (){
        Route::get('/','UserController@index')->name('users.index');
        Route::get('/{user}','UserController@show')->name('users.show');
        Route::get('/registrar','UserController@create')->name('users.create');
        Route::get('/{user}/editar','UserController@edit')->name('users.edit');
    });
});

Route::prefix('estudiantes')->group(function (){ //Rutas para los estudiantes
    Route::get('/','StudentController@index')->name('students.index');
    Route::get('/{user}','StudentController@show')->name('students.show');
    Route::get('/registrar','StudentController@create')->name('students.create');
    Route::get('/{user}/editar','StudentController@edit')->name('students.edit');
});

Route::namespace('SpatiePermissions')->group(function (){   //Rutas para los roles y permisos
    Route::prefix('roles')->group(function (){
        Route::get('/','RoleController@index')->name('roles.index');
        Route::get('/{role}','RoleController@show')->name('roles.show');
        Route::get('/registrar','RoleController@create')->name('roles.create');
        Route::get('/{role}/editar','RoleController@edit')->name('roles.edit');
    });

    Route::prefix('permisos')->group(function (){
        Route::get('/','PermissionController@index')->name('permissions.index');
        Route::get('/{permission}','PermissionController@show')->name('permissions.show');
        Route::get('/registrar','PermissionController@create')->name('permissions.create');
        Route::get('/{permission}/editar','PermissionController@edit')->name('permissions.edit');
    });

});
