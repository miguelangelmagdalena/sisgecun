<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSolicitudesProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('solicitudes_productos', function(Blueprint $table)
		{
			$table->foreign('comedores_id', 'fk_solicitudes_productos_comedores1')->references('id')->on('comedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('envios_productos_id', 'fk_solicitudes_productos_envios_productos1')->references('id')->on('envios_productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('solicitudes_productos', function(Blueprint $table)
		{
			$table->dropForeign('fk_solicitudes_productos_comedores1');
			$table->dropForeign('fk_solicitudes_productos_envios_productos1');
		});
	}

}
