<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the `Posts` table
		Schema::create('eventos', function($table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned()->index();
			$table->string('titulo');
			$table->longtext('contenido');
			$table->date('fecha_inicio');
			$table->date('fecha_fin');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			
			
			
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
		Schema::drop('eventos');
		
	}

}
