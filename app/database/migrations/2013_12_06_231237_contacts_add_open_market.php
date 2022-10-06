<?php

use Illuminate\Database\Migrations\Migration;

class ContactsAddOpenMarket extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contacts', function($table)
		{
		    $table->integer('sell_open_market');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//do nothing
	}

}