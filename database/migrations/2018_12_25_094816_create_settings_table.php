<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('site_title_ar', 191);
			$table->string('site_title_en', 191);
			$table->string('site_desc_ar', 191);
			$table->string('site_desc_en', 191);
			$table->text('site_keywords_ar', 65535);
			$table->text('site_keywords_en', 65535);
			$table->string('site_webmails', 191);
			$table->boolean('notify_messages_status')->nullable();
			$table->boolean('notify_comments_status')->nullable();
			$table->boolean('notify_orders_status')->nullable();
			$table->string('site_url', 191);
			$table->boolean('site_status');
			$table->text('close_msg', 65535);
			$table->string('social_link1', 191);
			$table->string('social_link2', 191);
			$table->string('social_link3', 191);
			$table->string('social_link4', 191);
			$table->string('social_link5', 191);
			$table->string('social_link6', 191);
			$table->string('social_link7', 191);
			$table->string('social_link8', 191);
			$table->string('social_link9', 191);
			$table->string('social_link10', 191);
			$table->string('contact_t1_ar', 191);
			$table->string('contact_t1_en', 191);
			$table->string('contact_t3', 191);
			$table->string('contact_t4', 191);
			$table->string('contact_t5', 191);
			$table->string('contact_t6', 191);
			$table->string('contact_t7_ar', 191);
			$table->string('contact_t7_en', 191);
			$table->string('style_logo_ar', 191)->nullable();
			$table->string('style_logo_en', 191)->nullable();
			$table->string('style_fav', 191)->nullable();
			$table->string('style_apple', 191)->nullable();
			$table->string('style_color1', 191)->nullable();
			$table->string('style_color2', 191)->nullable();
			$table->boolean('style_type')->nullable();
			$table->boolean('style_bg_type')->nullable();
			$table->string('style_bg_pattern', 191)->nullable();
			$table->string('style_bg_color', 191)->nullable();
			$table->string('style_bg_image', 191)->nullable();
			$table->boolean('style_subscribe')->nullable();
			$table->boolean('style_footer')->nullable();
			$table->string('style_footer_bg', 191)->nullable();
			$table->boolean('style_preload')->nullable();
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
		Schema::drop('settings');
	}

}
