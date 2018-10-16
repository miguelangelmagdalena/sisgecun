<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('categorias', function(Blueprint $table)
		{
			$table->foreign('productos_id', 'fk_categorias_productos1')->references('id')->on('productos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('categorias', function(Blueprint $table)
		{
			$table->dropForeign('fk_categorias_productos1');
		});
	}

}
