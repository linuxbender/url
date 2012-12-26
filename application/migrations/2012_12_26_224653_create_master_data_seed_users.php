<?php

class Create_Master_Data_Seed_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'name' => 'the One',
			'firstName' => 'admin',
			'email' => 'admin@hi.ch',
			'password' => Hash::make('54321'),
			'aktiv' => true,
			'bio' => 'n.a',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()	
		));

		DB::table('users')->insert(array(
			'name' => 'guest',
			'firstName' => 'guest',
			'email' => 'guest@hi.ch',
			'password' => Hash::make('12345'),
			'aktiv' => true,
			'bio' => 'n.a',
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