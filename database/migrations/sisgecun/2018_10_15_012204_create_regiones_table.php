<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regiones', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nombre', 191);
			$table->timestamps();
			$table->integer('estados_id')->index('fk_regiones_estados1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('regiones');
	}

}
