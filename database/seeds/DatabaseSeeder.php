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
       	$this->call(UsersRoleTableSeeder::class);
       	$this->call(UsersAddressRoleTableSeeder::class);
        $this->call(UsersTitleRoleTableSeeder::class);
       	$this->call(UsersContactRoleTableSeeder::class);
       	$this->call(UsersTableSeeder::class);
        $this->call(UsersContactNumberTableSeeder::class);
       	$this->call(UsersAddressTableSeeder::class);
    }
}
