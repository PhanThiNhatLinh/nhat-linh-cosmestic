<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('STT', true)->unsigned();
			$table->string('product_code')->unique();
			$table->string('product_name');
			$table->string('product_type_id');
			$table->string('brand_id');
			$table->integer('price');
			$table->integer('promotion')->nullable();
			$table->boolean('hot')->default(0);
			$table->integer('enstock');
			$table->text('description', 16777215);
			$table->text('image')->nullable();
			$table->bigInteger('user_id');
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
		Schema::drop('products');
	}

}
