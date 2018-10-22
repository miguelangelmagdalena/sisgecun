<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMppeuctTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mppeuct', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_MPPEUCT_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mppeuct', function(Blueprint $table)
		{
			$table->dropForeign('fk_MPPEUCT_users1');
		});
	}

}
