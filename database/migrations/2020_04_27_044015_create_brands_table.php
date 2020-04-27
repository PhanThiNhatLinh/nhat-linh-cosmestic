<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brands', function(Blueprint $table)
		{
			$table->bigInteger('STT', true)->unsigned();
			$table->string('brand_id')->unique();
			$table->string('brand_name');
			$table->string('country');
			$table->text('description', 16777215);
			$table->text('image');
			$table->bigInteger('user_id');
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
		Schema::drop('brands');
	}

}
