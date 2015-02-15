<?php

use Illuminate\Database\Migrations\Migration;

class CreateUrlsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Posts` table
		Schema::create('urls', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('carpeta_id')->unsigned();
			$table->string('url');
			$table->boolean('local')->default(true);
			$table->string('tipo');
			$table->foreign('carpeta_id')->references('id')->on('carpetas');
			
			
		});
		Schema::create('urls_entradas', function($table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('url_id')->unsigned();
			$table->integer('entrada_id')->unsigned();
			$table->unique(array('url_id','entrada_id'));
			$table->foreign('url_id')->references('id')->on('urls')->onDelete('cascade');
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
		Schema::drop('urls');
		Schema::drop('urls_entradas');
	}

}
