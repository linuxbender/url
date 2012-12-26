<?php

class Create_Master_Data_Language {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{		
		Schema::create('languages', function($table){
			$table->increments('id');
			$table->string('code', 10)->unique()->index();
			$table->string('shortName', 20)->index();
			$table->string('longName',128)->index();
			$table->integer('version')->index();			
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
		Schema::drop('languages');
	}

}