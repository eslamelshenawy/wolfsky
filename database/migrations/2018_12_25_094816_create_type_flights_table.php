<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('type_flights', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('flight1', 225)->nullable();
			$table->string('flight2', 225)->nullable();
			$table->string('flight3', 225)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('type_flights');
	}

}
