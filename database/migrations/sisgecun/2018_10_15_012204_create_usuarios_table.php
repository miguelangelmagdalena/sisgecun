<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cedula', 191);
			$table->string('primer nombre', 191);
			$table->string('segundo nombre', 191)->nullable();
			$table->string('primer apellido', 191);
			$table->string('segundo apellido', 191)->nullable();
			$table->string('password', 191);
			$table->string('telefono_celular', 191);
			$table->string('sexo', 191);
			$table->string('login', 191);
			$table->string('telefono1', 191)->nullable();
			$table->string('telefono2', 191)->nullable();
			$table->string('rif', 191)->nullable();
			$table->string('email', 191)->unique('email_UNIQUE');
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
		Schema::drop('usuarios');
	}

}
