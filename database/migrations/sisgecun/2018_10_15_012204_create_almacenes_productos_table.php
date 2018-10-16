<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlmacenesProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('almacenes_productos', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->timestamps();
			$table->integer('comedores_id')->index('fk_almacenes_productos_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('almacenes_productos');
	}

}
