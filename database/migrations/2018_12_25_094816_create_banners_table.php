<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('section_id');
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->text('details_ar', 65535)->nullable();
			$table->text('details_en', 65535)->nullable();
			$table->text('code', 65535)->nullable();
			$table->string('file_ar', 191)->nullable();
			$table->string('file_en', 191)->nullable();
			$table->boolean('video_type')->nullable();
			$table->string('youtube_link', 191)->nullable();
			$table->string('link_url', 191)->nullable();
			$table->string('icon', 191)->nullable();
			$table->boolean('status');
			$table->integer('visits');
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
		Schema::drop('banners');
	}

}
