<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParroquiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parroquias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('parroquia');
			$table->timestamps();
			$table->integer('id_municipio')->unsigned()->nullable()->index('id_municipio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parroquias');
	}

}
