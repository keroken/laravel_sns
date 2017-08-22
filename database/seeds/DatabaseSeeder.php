<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Eloquent::unguard();

		User::create(array(
			'email' => 'alexwsears@gmail.com',
			'name' => 'Alex Sears',
			'password' => Hash::make('alexsears')
		));

		User::create(array(
			'email' => 'george@foreman.com',
			'name' => 'George Foreman',
			'password' => Hash::make('georgeforeman')
		));

		User::create(array(
			'email' => 'tony@thetiger.com',
			'name' => 'Tony Tiger',
			'password' => Hash::make('tonytiger')
		));

		User::create(array(
			'email' => 'fred@flintstone.com',
			'name' => 'Fred Flintstone',
			'password' => Hash::make('fredflintstone')
		));
    }
}
