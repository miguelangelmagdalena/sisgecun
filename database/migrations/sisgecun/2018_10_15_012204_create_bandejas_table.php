<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBandejasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bandejas', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->date('fecha')->nullable();
			$table->string('observacion', 191)->nullable();
			$table->integer('cantidad_bandejas_servidas')->nullable();
			$table->string('cantidad_gramaje_total', 191)->nullable();
			$table->timestamps();
			$table->integer('comedores_id')->index('fk_bandejas_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bandejas');
	}

}
