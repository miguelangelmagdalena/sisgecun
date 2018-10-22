<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNutricionistasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutricionistas', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('estatus', 191)->nullable();
			$table->timestamps();
			$table->integer('users_id')->unsigned()->index('fk_nutricionistas_users1');
			$table->integer('comedores_id')->index('fk_nutricionistas_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nutricionistas');
	}

}
