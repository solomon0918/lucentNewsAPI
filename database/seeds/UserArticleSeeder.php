<?php

use Illuminate\Database\Seeder;

class UserArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_articles')->delete();
        $users = [
            [
                'article_id' => 'qwerty',
                'title' => 'Romeo And Juliet',
	        	'body' => 'Lorem Ipsum',
	        	'user_id' => 'eanora',
            ]
        ];

        DB::table('users_articles')->insert($users);
    }
}
