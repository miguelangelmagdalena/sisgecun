<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdministradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administradores', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->timestamps();
			$table->integer('users_id')->unsigned()->index('fk_administradores_users1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('administradores');
	}

}
