<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBandejasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bandejas', function(Blueprint $table)
		{
			$table->foreign('comedores_id', 'fk_bandejas_comedores1')->references('id')->on('comedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bandejas', function(Blueprint $table)
		{
			$table->dropForeign('fk_bandejas_comedores1');
		});
	}

}
