<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMunicipiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municipios', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nombre', 191)->nullable();
			$table->timestamps();
			$table->integer('ciudades_id')->index('fk_municipios_ciudades1');
			$table->integer('estados_id')->index('fk_municipios_estados1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('municipios');
	}

}
