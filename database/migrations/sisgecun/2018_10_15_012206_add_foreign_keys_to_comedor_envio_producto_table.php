<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComedorEnvioProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comedor_envio_producto', function(Blueprint $table)
		{
			$table->foreign('comedores_id', 'fk_comedor_envio_producto_comedores1')->references('id')->on('comedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('envios_productos_id', 'fk_comedor_envio_producto_envios_productos1')->references('id')->on('envios_productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comedor_envio_producto', function(Blueprint $table)
		{
			$table->dropForeign('fk_comedor_envio_producto_comedores1');
			$table->dropForeign('fk_comedor_envio_producto_envios_productos1');
		});
	}

}
