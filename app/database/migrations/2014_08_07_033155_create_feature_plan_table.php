<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeaturePlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feature_plan', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('feature_id')->unsigned()->index();
			$table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
			$table->integer('plan_id')->unsigned()->index();
			$table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
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
		Schema::drop('feature_plan');
	}

}
