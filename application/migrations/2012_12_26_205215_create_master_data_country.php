<?php

class Create_Master_Data_Country {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function($table){
			$table->increments('id');
			$table->string('code', 10)->unique()->index();
			$table->string('shortName', 20)->index();
			$table->string('longName',128)->index();
			$table->integer('version')->index();
			$table->integer('language_id')->index();
			$table->timestamps();

			//$table->foreign('language_id')->references('id')->on('languages');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('countries');
	}

}