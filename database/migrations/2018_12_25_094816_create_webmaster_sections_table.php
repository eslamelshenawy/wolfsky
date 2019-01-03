<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebmasterSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmaster_sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('row_no');
			$table->string('name', 191);
			$table->boolean('type');
			$table->boolean('sections_status');
			$table->boolean('comments_status');
			$table->boolean('date_status');
			$table->boolean('expire_date_status');
			$table->boolean('longtext_status');
			$table->boolean('editor_status');
			$table->boolean('attach_file_status');
			$table->boolean('extra_attach_file_status');
			$table->boolean('multi_images_status');
			$table->boolean('section_icon_status');
			$table->boolean('icon_status');
			$table->boolean('maps_status');
			$table->boolean('order_status');
			$table->boolean('related_status');
			$table->boolean('status');
			$table->string('seo_title_ar', 191)->nullable();
			$table->string('seo_title_en', 191)->nullable();
			$table->string('seo_description_ar', 191)->nullable();
			$table->string('seo_description_en', 191)->nullable();
			$table->string('seo_keywords_ar', 191)->nullable();
			$table->string('seo_keywords_en', 191)->nullable();
			$table->string('seo_url_slug_ar', 191)->nullable();
			$table->string('seo_url_slug_en', 191)->nullable();
			$table->integer('cit_countries_status');
			$table->integer('price_status');
			$table->integer('day_status');
			$table->integer('night_status');
			$table->integer('about_us');
			$table->integer('cout_hotel');
			$table->integer('hotel_air_status');
			$table->integer('status_appear');
			$table->integer('not_agree_status');
			$table->integer('agree_status');
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
		Schema::drop('webmaster_sections');
	}

}
