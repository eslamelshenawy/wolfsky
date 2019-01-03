<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->string('photo', 191)->nullable();
			$table->string('icon', 191)->nullable();
			$table->boolean('status');
			$table->integer('visits');
			$table->integer('webmaster_id');
			$table->integer('father_id');
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
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sections');
	}

}
