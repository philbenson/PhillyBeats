<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

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
			$table->string('name');
			$table->string('venue');
			$table->string('address');
			$table->string('start_date');
			$table->string('end_date');
			$table->string('door_time');
			$table->string('show_time');
			$table->string('end_time');
			$table->integer('price')->unsigned();
			$table->string('website');
			$table->string('facebook');
			$table->integer('added_by')->unsigned();
			$table->foreign('added_by')->references('id')->on('users');
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
		Schema::drop('events');
	}

}
