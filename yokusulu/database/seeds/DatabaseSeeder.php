<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UsersTableSeeder::class);
		$this->call(Host_usersTableSeeder::class);
		$this->call(Super_usersTableSeeder::class);
		$this->call(HousesTableSeed::class);
		$this->call(Disable_booking_datesTableSeeder::class);
	}
}
