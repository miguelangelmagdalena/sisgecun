<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescripcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descripciones', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->boolean('tiene_cuarto_frio')->nullable();
			$table->boolean('cuarto_frio_operativo')->nullable();
			$table->integer('capacidad_cuartofrio')->nullable();
			$table->boolean('tiene_cuarto_congelacion')->nullable();
			$table->string('capacidad_cuarto_congelacion', 191)->nullable();
			$table->boolean('cuarto_congelacion_operativo')->nullable();
			$table->boolean('tiene_utensilios')->nullable();
			$table->integer('cantidad_platos')->nullable();
			$table->integer('cantidad_cubiertos')->nullable();
			$table->integer('cantidad_vasos')->nullable();
			$table->boolean('tienen_extintores')->nullable();
			$table->integer('cantidad_extintores')->nullable();
			$table->boolean('extintores_operativo')->nullable();
			$table->boolean('tanquilla_agualluvia');
			$table->boolean('tanquilla_aguapotable');
			$table->boolean('tanquilla_aguaresidual');
			$table->boolean('tanquilla_electricidad');
			$table->boolean('medidor_electricidad')->nullable();
			$table->boolean('sum_aguapotable')->nullable();
			$table->boolean('iluminacion_natural');
			$table->boolean('iluminacion_artificial');
			$table->boolean('electricidad_110');
			$table->boolean('electricidad_220');
			$table->boolean('internet');
			$table->boolean('extension');
			$table->boolean('linea_directa');
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
		Schema::drop('descripciones');
	}

}
