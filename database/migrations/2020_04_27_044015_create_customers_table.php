<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('customer_id', true);
			$table->string('name', 300)->nullable();
			$table->string('email', 300)->nullable();
			$table->bigInteger('phone')->nullable();
			$table->string('address', 1000)->nullable();
			$table->string('city', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
