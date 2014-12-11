<?php

// Nos mostrará el formulario de login.
Route::get('admin/login', 'Admin_AuthController@showLogin');
Route::get('admin', 'Admin_AuthController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('admin/login', 'Admin_AuthController@postLogin');
Route::post('admin', 'Admin_AuthController@postLogin');

 // Esta ruta nos servirá para cerrar sesión.
 Route::get('admin/logout', 'Admin_AuthController@logOut');

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');
Route::get('/', 'AuthController@showLogin');
// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');
Route::post('/', 'AuthController@postLogin');

 // Esta ruta nos servirá para cerrar sesión.
 Route::get('logout', 'AuthController@logOut');

 if(!function_exists('getRole'))
    {
        function getRole($role)
        {
 
        switch ($role) {
            case 2:
                return "Usuario.";
                break;
            case 3:
                return "Administrador.";
                break;            
            default:
                return "Invitado.";
                break;
        }
    }
}

//comprueba primero si existe la sesión, si es así comprueba el rol del usuario
Route::group(array('before' => 'auth'), function()
{
    //sólo pueden acceder usuarios con role_id 3
    Route::group(array("before" => "roles:3,error"), function()
    {
 
    	Route::resource('admin/posts', 'Admin_PostController');  //Ruta exclusiva administrador
    	Route::resource('admin/users','Admin_UsersController');  //Ruta exclusiva administrador  
    });

    Route::group(array("before" => "roles:2-3,error"), function()
    {
       Route::get('/', function()
    	{
        return View::make('hello');    //Ruta acceso compartido
    	});  
        Route::resource('posts', 'PostController'); 
    });

    //si ha iniciado sesión puede acceder, cualquier role
    Route::get('error', function()
    {
        return "Error: Acceso denegado "; 
    });

});
Route::get('acercade', function()
        {
        return View::make('acercade');    //Ruta acceso compartido
        });  

Route::get('contactenos', function()
        {
        return View::make('contactenos');    //Ruta acceso compartido
        });  