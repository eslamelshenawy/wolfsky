<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebmasterSectionFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmaster_section_fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('webmaster_id');
			$table->integer('type');
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
			$table->string('default_value', 191)->nullable();
			$table->text('details_ar', 65535)->nullable();
			$table->text('details_en', 65535)->nullable();
			$table->integer('row_no');
			$table->boolean('status');
			$table->boolean('required');
			$table->string('lang_code', 191)->nullable();
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
		Schema::drop('webmaster_section_fields');
	}

}
