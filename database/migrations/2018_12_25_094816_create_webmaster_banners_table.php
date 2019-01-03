<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebmasterBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmaster_banners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('row_no');
			$table->string('name', 191);
			$table->integer('width');
			$table->integer('height');
			$table->boolean('desc_status');
			$table->boolean('link_status');
			$table->boolean('type');
			$table->boolean('icon_status');
			$table->boolean('status');
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
		Schema::drop('webmaster_banners');
	}

}
