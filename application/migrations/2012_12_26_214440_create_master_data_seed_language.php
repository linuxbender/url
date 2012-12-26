<?php

class Create_Master_Data_Seed_Language {

	/**
	 * Make changes to the database.
	 * 
	 * @return void
	 */
	public function up()
	{
		DB::table('languages')->insert(array(
			'code' => 'en_US',
			'shortName' => 'eng',
			'longName' => 'English, US',
			'version' => 1,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()				
		));

		DB::table('languages')->insert(array(
			'code' => 'de_DE',
			'shortName' => 'ger',
			'longName' => 'German',
			'version' => 1,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()				
		));

		DB::table('languages')->insert(array(
			'code' => 'ja_JP',
			'shortName' => 'jp',
			'longName' => 'Japanese',
			'version' => 1,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()				
		));

		DB::table('languages')->insert(array(
			'code' => 'es_ES',
			'shortName' => 'es',
			'longName' => 'Spanish',
			'version' => 1,
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()				
		));

		DB::table('languages')->insert(array(
			'code' => 'fi_FI',
			'shortName' => 'fi',
			'longName' => 'Finnish',
			'version' => 1,
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