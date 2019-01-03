<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->boolean('view_status')->default(0);
			$table->boolean('add_status')->default(0);
			$table->boolean('edit_status')->default(0);
			$table->boolean('delete_status')->default(0);
			$table->boolean('analytics_status')->default(0);
			$table->boolean('inbox_status')->default(0);
			$table->boolean('newsletter_status')->default(0);
			$table->boolean('calendar_status')->default(0);
			$table->boolean('banners_status')->default(0);
			$table->boolean('settings_status')->default(0);
			$table->boolean('webmaster_status')->default(0);
			$table->string('data_sections', 191)->nullable();
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
		Schema::drop('permissions');
	}

}
