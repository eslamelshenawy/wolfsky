<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('topic_id');
			$table->string('longitude', 191)->nullable();
			$table->string('latitude', 191)->nullable();
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->text('details_ar', 65535)->nullable();
			$table->text('details_en', 65535)->nullable();
			$table->boolean('icon');
			$table->boolean('status');
			$table->integer('row_no');
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
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
		Schema::drop('maps');
	}

}
