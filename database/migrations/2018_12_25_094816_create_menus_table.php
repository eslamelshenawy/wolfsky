<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('row_no');
			$table->integer('father_id');
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->boolean('status');
			$table->boolean('type');
			$table->integer('cat_id')->nullable();
			$table->string('link', 191)->nullable();
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
		Schema::drop('menus');
	}

}
