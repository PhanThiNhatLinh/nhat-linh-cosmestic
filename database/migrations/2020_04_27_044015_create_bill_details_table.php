<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_bill')->nullable();
			$table->integer('id_product')->nullable();
			$table->string('name_products', 500)->nullable();
			$table->integer('quantity')->nullable();
			$table->integer('unit_price')->nullable();
			$table->bigInteger('total_price')->nullable();
			$table->boolean('status')->default(1);
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
		Schema::drop('bill_details');
	}

}
