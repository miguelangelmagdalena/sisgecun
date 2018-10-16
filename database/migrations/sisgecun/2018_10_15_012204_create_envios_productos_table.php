<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnviosProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('envios_productos', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->timestamps();
			$table->integer('MPPEUCT_id')->index('fk_envios_productos_MPPEUCT1');
			$table->integer('productos_recibidos_id')->index('fk_envios_productos_productos_recibidos1');
			$table->integer('productos_enviados_id')->index('fk_envios_productos_productos_enviados1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('envios_productos');
	}

}
