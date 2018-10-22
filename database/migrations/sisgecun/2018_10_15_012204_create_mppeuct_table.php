<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMppeuctTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mppeuct', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('cargo', 191);
			$table->string('dependencia', 191);
			$table->timestamps();
			$table->integer('users_id')->unsigned()->index('fk_MPPEUCT_users1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mppeuct');
	}

}
