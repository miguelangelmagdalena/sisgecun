<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParroquiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parroquias', function(Blueprint $table)
		{
			$table->foreign('id_municipio', 'parroquias_ibfk_1')->references('id')->on('municipios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parroquias', function(Blueprint $table)
		{
			$table->dropForeign('parroquias_ibfk_1');
		});
	}

}
