<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id')->nullable();
			$table->string('first_name', 191)->nullable();
			$table->string('last_name', 191)->nullable();
			$table->string('company', 191)->nullable();
			$table->string('email', 191);
			$table->string('password', 191)->nullable();
			$table->string('phone', 191)->nullable();
			$table->integer('country_id')->nullable();
			$table->string('city', 191)->nullable();
			$table->string('address', 191)->nullable();
			$table->string('photo', 191)->nullable();
			$table->text('notes', 65535)->nullable();
			$table->dateTime('last_login')->nullable();
			$table->string('last_login_ip', 191)->nullable();
			$table->string('facebook_id', 191)->nullable();
			$table->string('twitter_id', 191)->nullable();
			$table->string('google_id', 191)->nullable();
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
		Schema::drop('contacts');
	}

}
