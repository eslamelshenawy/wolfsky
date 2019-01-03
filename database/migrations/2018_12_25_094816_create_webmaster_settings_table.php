<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebmasterSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmaster_settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('ar_box_status');
			$table->boolean('en_box_status');
			$table->boolean('seo_status');
			$table->boolean('analytics_status');
			$table->boolean('banners_status');
			$table->boolean('inbox_status');
			$table->boolean('calendar_status');
			$table->boolean('settings_status');
			$table->boolean('newsletter_status');
			$table->boolean('members_status');
			$table->boolean('orders_status');
			$table->boolean('shop_status');
			$table->boolean('shop_settings_status');
			$table->integer('default_currency_id');
			$table->integer('languages_count');
			$table->integer('latest_news_section_id');
			$table->integer('header_menu_id');
			$table->integer('footer_menu_id');
			$table->integer('home_banners_section_id');
			$table->integer('home_text_banners_section_id');
			$table->integer('side_banners_section_id');
			$table->integer('contact_page_id');
			$table->integer('newsletter_contacts_group');
			$table->boolean('new_comments_status');
			$table->boolean('links_status');
			$table->boolean('register_status');
			$table->integer('permission_group');
			$table->boolean('api_status');
			$table->string('api_key', 191);
			$table->integer('home_content1_section_id');
			$table->integer('home_content2_section_id');
			$table->integer('home_content3_section_id');
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
		Schema::drop('webmaster_settings');
	}

}
