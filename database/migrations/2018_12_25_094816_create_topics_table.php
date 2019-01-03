<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->text('details_ar')->nullable();
			$table->text('details_en')->nullable();
			$table->date('date')->nullable();
			$table->date('expire_date')->nullable();
			$table->boolean('video_type')->nullable();
			$table->string('photo_file', 191)->nullable();
			$table->string('attach_file', 191)->nullable();
			$table->text('video_file', 65535)->nullable();
			$table->string('audio_file', 191)->nullable();
			$table->string('icon', 191)->nullable();
			$table->boolean('status');
			$table->integer('visits');
			$table->integer('webmaster_id');
			$table->integer('section_id');
			$table->integer('row_no');
			$table->string('seo_title_ar', 191)->nullable();
			$table->string('seo_title_en', 191)->nullable();
			$table->string('seo_description_ar', 191)->nullable();
			$table->string('seo_description_en', 191)->nullable();
			$table->string('seo_keywords_ar', 191)->nullable();
			$table->string('seo_keywords_en', 191)->nullable();
			$table->string('seo_url_slug_ar', 191)->nullable();
			$table->string('seo_url_slug_en', 191)->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
			$table->integer('status_appear');
			$table->integer('price');
			$table->integer('day');
			$table->integer('night');
			$table->integer('country_id');
			$table->integer('number_hotel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}
