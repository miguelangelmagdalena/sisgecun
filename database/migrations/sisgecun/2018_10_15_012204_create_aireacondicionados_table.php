<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAireacondicionadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aireacondicionados', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('estatus', 191)->nullable();
			$table->string('capacidad_enfiramiento', 191)->nullable();
			$table->timestamps();
			$table->integer('comedores_id')->index('fk_aireacondicionados_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aireacondicionados');
	}

}
