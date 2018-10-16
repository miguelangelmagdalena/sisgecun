<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductosDespachadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('productos_despachados', function(Blueprint $table)
		{
			$table->foreign('despachar_responsables_id', 'fk_producto_enviado_despachar_responsable_despachar_responsab1')->references('id')->on('despachar_responsables')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('productos_enviados_id', 'fk_producto_enviado_despachar_responsable_productos_enviados1')->references('id')->on('productos_enviados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('productos_despachados', function(Blueprint $table)
		{
			$table->dropForeign('fk_producto_enviado_despachar_responsable_despachar_responsab1');
			$table->dropForeign('fk_producto_enviado_despachar_responsable_productos_enviados1');
		});
	}

}
