<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConfiguracionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('configuraciones', function(Blueprint $table)
		{
			$table->foreign('administradores_id', 'fk_configuraciones_administradores1')->references('id')->on('administradores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('configuraciones', function(Blueprint $table)
		{
			$table->dropForeign('fk_configuraciones_administradores1');
		});
	}

}
