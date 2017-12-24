<?php

use Illuminate\Database\Seeder;

class UsersTitleRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lk_user_title')->delete();
        $users_role = [
            [
                'user_title_desc' => 'Mr'
            ],
            [
                'user_title_desc' => 'Ms'
            ],
            [
            	'user_title_desc' => 'Mrs'
            ]
        ];

        DB::table('lk_user_title')->insert($users_role);
    }
}
