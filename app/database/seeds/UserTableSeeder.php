<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'role_id'  => 3, //admin
            'username'     => 'admin',
            'name' => 'Administrador',
            'email'=> 'admin@mail.com',
            'password' => Hash::make('12345678') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
        User::create(array(
            'role_id'  => 2, //user
            'username'     => 'user',
            'name' => 'Usuario',
            'email'=> 'user@mail.com',
            'password' => Hash::make('12345678') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}