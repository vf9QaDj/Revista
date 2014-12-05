<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class AdminTableSeeder extends Seeder {
    public function run(){
        Admin::create(array(
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'name'=> 'Administrator',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}