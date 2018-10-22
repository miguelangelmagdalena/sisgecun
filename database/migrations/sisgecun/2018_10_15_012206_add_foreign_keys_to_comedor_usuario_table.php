<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComedorUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comedor_usuario', function(Blueprint $table)
		{
			$table->foreign('comedores_id', 'fk_comedor_usuario_comedores1')->references('id')->on('comedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_comedor_usuario_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comedor_usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_comedor_usuario_comedores1');
			$table->dropForeign('fk_comedor_usuario_users1');
		});
	}

}
