<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttachFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attach_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('topic_id');
			$table->string('file', 191)->nullable();
			$table->string('title_ar', 191)->nullable();
			$table->string('title_en', 191)->nullable();
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
		Schema::drop('attach_files');
	}

}
