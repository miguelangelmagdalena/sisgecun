<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitudesProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicitudes_productos', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->date('fecha')->nullable();
			$table->timestamps();
			$table->integer('envios_productos_id')->index('fk_solicitudes_productos_envios_productos1');
			$table->integer('comedores_id')->index('fk_solicitudes_productos_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('solicitudes_productos');
	}

}
