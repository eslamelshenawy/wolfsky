<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airport_books', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('leave_city');
			$table->string('arrive_city');
			$table->date('leave_date');
			$table->date('arrive_date');
			$table->string('status_trip', 11);
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('num_trip');
			$table->string('type_flight', 225);
			$table->integer('agree_status')->nullable()->default(0);
			$table->integer('not_agree_status')->nullable()->default(0);
			$table->string('flight_status', 225);
			$table->string('data_status', 11);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('airport_books');
	}

}
