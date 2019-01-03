<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('way_name');
			$table->date('entry_date');
			$table->date('leave_date');
			$table->integer('night_numb');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('agree_status')->nullable()->default(0);
			$table->integer('type_flight');
			$table->integer('number_air')->nullable();
			$table->integer('not_agree_status')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hotels');
	}

}
