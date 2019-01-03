<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyticsVisitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analytics_visitors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ip', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->string('country_code', 191)->nullable();
			$table->string('country', 191)->nullable();
			$table->string('region', 191)->nullable();
			$table->string('full_address', 191)->nullable();
			$table->string('location_cor1', 191)->nullable();
			$table->string('location_cor2', 191)->nullable();
			$table->string('os', 191)->nullable();
			$table->string('browser', 191)->nullable();
			$table->string('resolution', 191)->nullable();
			$table->string('referrer', 191)->nullable();
			$table->string('hostname', 191)->nullable();
			$table->string('org', 191)->nullable();
			$table->date('date');
			$table->time('time');
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
		Schema::drop('analytics_visitors');
	}

}
