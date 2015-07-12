<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('address');
			$table->string('website');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
			// $table->integer('added_by')->unsigned();
			// $table->foreign('added_by')->references('id')->on('users');
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
		Schema::drop('venues');
	}

}
