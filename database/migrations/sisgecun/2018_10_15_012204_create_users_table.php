<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('role_id')->unsigned()->nullable()->index('users_role_id_foreign');
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->string('avatar', 191)->nullable()->default('users/default.png');
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->text('settings', 65535)->nullable();
			$table->string('cedula', 191)->nullable();
			$table->string('rif', 191)->nullable();
			$table->string('primer_nombre', 191)->nullable();
			$table->string('segundo_nombre', 191)->nullable();
			$table->string('primer_apellido', 191)->nullable();
			$table->string('segundo_apellido', 191)->nullable();
			$table->string('sexo', 191)->nullable();
			$table->string('telefono_celular', 191)->nullable();
			$table->string('telefono1', 191)->nullable();
			$table->string('telefono2', 191)->nullable();
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
		Schema::drop('users');
	}

}
