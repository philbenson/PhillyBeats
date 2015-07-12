<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promoters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('city');
			$table->string('website');
			// $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('promoters');
	}

}
