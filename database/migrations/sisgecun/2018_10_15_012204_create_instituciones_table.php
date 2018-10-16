<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstitucionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instituciones', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nombre', 191);
			$table->string('siglas', 191);
			$table->string('direccion', 191)->nullable();
			$table->string('rif', 191)->nullable();
			$table->integer('matricula_estudiantil');
			$table->integer('cantidad_matricula_femeninca');
			$table->integer('cantidad_matricula_masculino');
			$table->string('fax', 191)->nullable();
			$table->string('correo_electronico', 191);
			$table->string('codigo_postal', 191)->nullable();
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
		Schema::drop('instituciones');
	}

}
