<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComedorResponsableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comedor_responsable', function(Blueprint $table)
		{
			$table->foreign('comedores_id', 'fk_comedor_responsable_comedores1')->references('id')->on('comedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_comedor_responsable_usuarios1')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comedor_responsable', function(Blueprint $table)
		{
			$table->dropForeign('fk_comedor_responsable_comedores1');
			$table->dropForeign('fk_comedor_responsable_usuarios1');
		});
	}

}
