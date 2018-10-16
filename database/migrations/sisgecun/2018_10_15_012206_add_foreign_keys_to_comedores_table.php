<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comedores', function(Blueprint $table)
		{
			$table->foreign('descripciones_id', 'fk_comedores_descripciones1')->references('id')->on('descripciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('instituciones_id', 'fk_comedores_instituciones1')->references('id')->on('instituciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comedores', function(Blueprint $table)
		{
			$table->dropForeign('fk_comedores_descripciones1');
			$table->dropForeign('fk_comedores_instituciones1');
		});
	}

}
