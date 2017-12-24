<?php

use Illuminate\Database\Seeder;

class UsersContactNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_contact')->delete();
        $users_contact = [
            [
                'area_code' => '+63',
                'country' => 'Philippines',
                'number' => '9183832520',
                'user_id' => 'eanora',
                'contact_role_id' => 1,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users_contact')->insert($users_contact);
    }
}
