<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('BrandTableSeeder');
		$this->call('ModelTableSeeder');
		/*$this->call('EmployeeTableSeeder');
		$this->call('OfficeTableSeeder'); */
	}

}
