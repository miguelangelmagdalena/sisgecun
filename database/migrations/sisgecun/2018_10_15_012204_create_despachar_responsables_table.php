<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDespacharResponsablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('despachar_responsables', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nombre', 191)->nullable();
			$table->string('apellido', 191)->nullable();
			$table->string('telefono_celular', 191)->nullable();
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
		Schema::drop('despachar_responsables');
	}

}
