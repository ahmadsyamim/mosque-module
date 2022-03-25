<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('image', 191)->nullable();
			$table->dateTime('date_from')->nullable();
			$table->dateTime('date_to')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('mosque_id')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
;