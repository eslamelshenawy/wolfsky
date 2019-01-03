<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cat_id')->default(0);
			$table->integer('group_id')->nullable();
			$table->integer('contact_id')->nullable();
			$table->integer('father_id')->nullable();
			$table->string('title', 191)->nullable();
			$table->text('details')->nullable();
			$table->dateTime('date');
			$table->string('from_email', 191)->nullable();
			$table->string('from_name', 191)->nullable();
			$table->string('from_phone', 191)->nullable();
			$table->string('to_email', 191)->nullable();
			$table->string('to_name', 191)->nullable();
			$table->string('to_cc', 191)->nullable();
			$table->string('to_bcc', 191)->nullable();
			$table->boolean('status')->default(0);
			$table->boolean('flag')->default(0);
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
		Schema::drop('webmails');
	}

}
