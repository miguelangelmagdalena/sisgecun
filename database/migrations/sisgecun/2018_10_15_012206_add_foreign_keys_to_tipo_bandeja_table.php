<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTipoBandejaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipo_bandeja', function(Blueprint $table)
		{
			$table->foreign('bandejas_id', 'fk_Tipo_Bandeja_bandejas1')->references('id')->on('bandejas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tipo_bandeja', function(Blueprint $table)
		{
			$table->dropForeign('fk_Tipo_Bandeja_bandejas1');
		});
	}

}
