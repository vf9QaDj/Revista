<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creamos la tabla users con los campos más básicos.
        Schema::create('admins',function($table){
            $table->increments('id');
            $table->string('name',100);
            $table->string('username',100)->unique();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Eliminar la tabla users
        Schema::drop('admins');
	}

}
