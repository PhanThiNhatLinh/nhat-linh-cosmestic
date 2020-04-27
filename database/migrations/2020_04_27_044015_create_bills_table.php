<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_customer')->nullable();
			$table->dateTime('date_order')->nullable();
			$table->bigInteger('total')->nullable();
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
		Schema::drop('bills');
	}

}
