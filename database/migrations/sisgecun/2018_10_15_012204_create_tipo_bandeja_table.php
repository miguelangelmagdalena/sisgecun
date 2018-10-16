<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoBandejaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_bandeja', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('tipo_bandeja', 191)->comment('desayuno, almuerzo, merienda, cena');
			$table->timestamps();
			$table->integer('bandejas_id')->index('fk_Tipo_Bandeja_bandejas1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_bandeja');
	}

}
