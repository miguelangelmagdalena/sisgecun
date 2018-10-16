<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfiguracionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configuraciones', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('configuracion', 191)->nullable();
			$table->timestamps();
			$table->integer('administradores_id')->index('fk_configuraciones_administradores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('configuraciones');
	}

}
