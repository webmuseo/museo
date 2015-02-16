<?php

use Illuminate\Database\Migrations\Migration;

class CreateEnlacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Posts` table
		Schema::create('enlaces', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('nombre');
			$table->integer('carpeta_id')->unsigned();
			$table->string('url');
			$table->boolean('local')->default(true);
			$table->string('tipo');
			$table->foreign('carpeta_id')->references('id')->on('carpetas');
			
			
		});
		Schema::create('enlaces_entradas', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('enlace_id')->unsigned();
			$table->integer('entrada_id')->unsigned();
			$table->unique(array('enlace_id','entrada_id'));
			$table->foreign('enlace_id')->references('id')->on('enlaces')->onDelete('cascade');
			$table->foreign('entrada_id')->references('id')->on('entradas')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the `Posts` table
		Schema::drop('enlaces');
		Schema::drop('enlaces_entradas');
	}

}
