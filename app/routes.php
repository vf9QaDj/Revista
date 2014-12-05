<?php

// Nos mostrará el formulario de login.
Route::get('admin/login', 'Admin_AuthController@showLogin');
Route::get('admin', 'Admin_AuthController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('admin/login', 'Admin_AuthController@postLogin');
Route::post('admin', 'Admin_AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{

    Route::resource('admin/posts', 'Admin_PostController');
    Route::resource('admin/users','Admin_PostController');

 });
 // Esta ruta nos servirá para cerrar sesión.
 Route::get('admin/logout', 'Admin_AuthController@logOut');

 
// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');
Route::get('/', 'AuthController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');
Route::post('/', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'userauth'), function()
{

     Route::get('/', function()
    {
        return View::make('hello');
    });

 });
 // Esta ruta nos servirá para cerrar sesión.
 Route::get('logout', 'AuthController@logOut');