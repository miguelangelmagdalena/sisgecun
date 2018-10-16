<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductosDespachadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos_despachados', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->timestamps();
			$table->integer('despachar_responsables_id')->index('fk_producto_enviado_despachar_responsable_despachar_responsab1');
			$table->integer('productos_enviados_id')->index('fk_producto_enviado_despachar_responsable_productos_enviados1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos_despachados');
	}

}
