<?php

class Create_Master_Data_Country_Set_Foreign {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::table('countries', function($table) {			
			$table->foreign('language_id')->references('id')->on('languages');
		});*/
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		/*Schema::table('countries', function($table) {			
			$table->drop_foreign('countries_language_id_foreign');
		});*/		
	}

}