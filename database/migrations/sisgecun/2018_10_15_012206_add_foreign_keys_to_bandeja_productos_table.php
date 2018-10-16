<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBandejaProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bandeja_productos', function(Blueprint $table)
		{
			$table->foreign('bandejas_id', 'fk_bandeja_productos_bandejas1')->references('id')->on('bandejas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bandeja_productos', function(Blueprint $table)
		{
			$table->dropForeign('fk_bandeja_productos_bandejas1');
		});
	}

}
