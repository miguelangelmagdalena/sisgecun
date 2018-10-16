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
			$table->foreign('ciudades_id', 'fk_municipios_ciudades1')->references('id')->on('ciudades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('estados_id', 'fk_municipios_estados1')->references('id')->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
			$table->dropForeign('fk_municipios_ciudades1');
			$table->dropForeign('fk_municipios_estados1');
		});
	}

}
