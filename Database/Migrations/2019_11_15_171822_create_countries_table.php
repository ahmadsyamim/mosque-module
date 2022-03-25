<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('countries');
		Schema::create('countries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('iso', 2);
			$table->string('name', 80);
			$table->string('nicename', 80);
			$table->char('iso3', 3)->nullable();
			$table->smallInteger('numcode')->nullable();
			$table->integer('phonecode');
			$table->softDeletes();
		});

		Artisan::call('db:seed', [
			'--class' => '\\Modules\\Mosque\\Database\\Seeders\\CountriesTableSeeder',
			'--force' => true,
		]);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}
;