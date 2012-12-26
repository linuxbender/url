<?php

class Create_Master_Data_Seed_Country {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('countries')->insert(array(
			'code' => 'USA',
			'shortName' => 'USA',
			'longName' => 'United States of America',
			'version' => 1,
			'language_id' => 1,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()		
		));

		DB::table('countries')->insert(array(
			'code' => 'ES',
			'shortName' => 'ES',
			'longName' => 'Spain',
			'version' => 1,
			'language_id' => 4,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()				
		));

		DB::table('countries')->insert(array(
			'code' => 'FI',
			'shortName' => 'FI',
			'longName' => 'Finland',
			'version' => 1,
			'language_id' => 5,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()			
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}