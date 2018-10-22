<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComedorUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comedor_usuario', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cargo', 191);
			$table->string('tipo_responsable', 191)->nullable();
			$table->string('unidad_institucion', 191)->nullable();
			$table->timestamps();
			$table->integer('users_id')->unsigned()->index('fk_comedor_usuario_users1');
			$table->integer('comedores_id')->index('fk_comedor_usuario_comedores1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comedor_usuario');
	}

}
