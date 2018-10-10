<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMunicipiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('municipios', function(Blueprint $table)
		{
			$table->foreign('id_estado', 'municipios_ibfk_1')->references('id')->on('states')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('municipios', function(Blueprint $table)
		{
			$table->dropForeign('municipios_ibfk_1');
		});
	}

}
