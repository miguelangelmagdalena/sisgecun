<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnviosProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('envios_productos', function(Blueprint $table)
		{
			$table->foreign('MPPEUCT_id', 'fk_envios_productos_MPPEUCT1')->references('id')->on('mppeuct')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('productos_enviados_id', 'fk_envios_productos_productos_enviados1')->references('id')->on('productos_enviados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('productos_recibidos_id', 'fk_envios_productos_productos_recibidos1')->references('id')->on('productos_recibidos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('envios_productos', function(Blueprint $table)
		{
			$table->dropForeign('fk_envios_productos_MPPEUCT1');
			$table->dropForeign('fk_envios_productos_productos_enviados1');
			$table->dropForeign('fk_envios_productos_productos_recibidos1');
		});
	}

}
