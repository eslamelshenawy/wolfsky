<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyticsPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analytics_pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('visitor_id');
			$table->string('ip', 191)->nullable();
			$table->string('title', 191)->nullable();
			$table->string('name', 191)->nullable();
			$table->string('query', 191)->nullable();
			$table->string('load_time', 191)->nullable();
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
		Schema::drop('analytics_pages');
	}

}
