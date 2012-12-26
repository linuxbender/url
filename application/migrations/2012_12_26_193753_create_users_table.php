<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('name', 80);
			$table->string('firstName', 80);
			$table->string('password',128);
			$table->string('email',128)->unique();
			$table->text('bio');
			$table->boolean('aktiv')->default(0);
			$table->timestamps();
		});		
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}