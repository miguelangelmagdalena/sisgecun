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
			$table->foreign('municipios_id', 'fk_parroquias_municipios1')->references('id')->on('municipios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('fk_parroquias_municipios1');
		});
	}

}
