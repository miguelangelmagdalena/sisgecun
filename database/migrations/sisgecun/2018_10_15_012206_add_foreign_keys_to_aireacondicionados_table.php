<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAireacondicionadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aireacondicionados', function(Blueprint $table)
		{
			$table->foreign('comedores_id', 'fk_aireacondicionados_comedores1')->references('id')->on('comedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aireacondicionados', function(Blueprint $table)
		{
			$table->dropForeign('fk_aireacondicionados_comedores1');
		});
	}

}
