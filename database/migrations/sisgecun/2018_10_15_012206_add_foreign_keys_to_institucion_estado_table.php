<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInstitucionEstadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('institucion_estado', function(Blueprint $table)
		{
			$table->foreign('estados_id', 'fk_institucion_estado_estados1')->references('id')->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('instituciones_id', 'fk_institucion_estado_instituciones1')->references('id')->on('instituciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('institucion_estado', function(Blueprint $table)
		{
			$table->dropForeign('fk_institucion_estado_estados1');
			$table->dropForeign('fk_institucion_estado_instituciones1');
		});
	}

}
