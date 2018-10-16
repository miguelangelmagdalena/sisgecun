<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComedorResponsableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comedor_responsable', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->timestamps();
			$table->integer('usuarios_id')->index('fk_comedor_responsable_usuarios1');
			$table->integer('comedores_id')->index('fk_comedor_responsable_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comedor_responsable');
	}

}
