<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComedorProductoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comedor_producto', function(Blueprint $table)
		{
			$table->foreign('envios_productos_id', 'fk_comedor_producto_envios_productos1')->references('id')->on('envios_productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('productos_id', 'fk_comedor_producto_productos1')->references('id')->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comedor_producto', function(Blueprint $table)
		{
			$table->dropForeign('fk_comedor_producto_envios_productos1');
			$table->dropForeign('fk_comedor_producto_productos1');
		});
	}

}
