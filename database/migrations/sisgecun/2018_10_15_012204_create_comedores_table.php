<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comedores', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('codigosica', 191);
			$table->string('estatus', 191);
			$table->string('observacion', 191);
			$table->string('descripcion', 191);
			$table->integer('capacidad_atencion');
			$table->integer('cantidad_estudiantes_desayuno');
			$table->integer('cantidad_Estudiantes_almuerzo');
			$table->integer('cantidad_Estudiantes_cena');
			$table->boolean('menu_establecido')->nullable();
			$table->integer('cant_Estudiantes_femenino_discap')->nullable();
			$table->integer('cant_estudiantes_masculino_discap')->nullable();
			$table->timestamps();
			$table->integer('instituciones_id')->index('fk_comedores_instituciones1');
			$table->integer('descripciones_id')->index('fk_comedores_descripciones1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comedores');
	}

}
