<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersHotelAirportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_hotel_airport', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('airport_id');
			$table->integer('hotel_id');
			$table->integer('class_id');
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
		Schema::drop('users_hotel_airport');
	}

}
