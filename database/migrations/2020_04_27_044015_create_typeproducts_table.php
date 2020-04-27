<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeproductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('typeproducts', function(Blueprint $table)
		{
			$table->bigInteger('STT', true)->unsigned();
			$table->string('product_type_id')->unique();
			$table->string('product_type_name');
			$table->text('description', 16777215);
			$table->bigInteger('group_code');
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
		Schema::drop('typeproducts');
	}

}
