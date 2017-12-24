<?php

use Illuminate\Database\Seeder;

class UsersRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lk_user_role')->delete();
        $users_role = [
            [
                'role_description' => 'Administrator'
            ],
            [
                'role_description' => 'User'
            ]
        ];

        DB::table('lk_user_role')->insert($users_role);
    }
}
