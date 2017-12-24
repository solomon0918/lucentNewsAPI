<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();
        $users = [
            [
                'user_id' => 'eanora',
                'user_title_id' => 1,
	        	'first_name' => 'Erwin Mark',
	        	'middle_name' => 'Daffon',
	        	'last_name' => 'Anora',
	        	'bdate' => \Carbon\Carbon::create(1996,04,17,0,0,0),
	        	'email' => 'anora.erwinmark@gmail.com',
	        	'password' => Hash::make('admin0918'),
	        	'user_role_id' => 1,
	        	'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
	        	'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users')->insert($users);

        factory(App\User::class, 5)->create();
    }
}
