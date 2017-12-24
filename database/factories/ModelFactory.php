<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $first_name = $faker->firstName;
    $last_name = $faker->lastName;
    $user_id = $first_name[0] . $last_name;

    return [
    	'user_id' => strtolower($user_id),
    	'user_title_id' => rand(1, 3),
    	'first_name' => $first_name,
    	'last_name' => $last_name,
    	'bdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'user_role_id' => rand(1, 2),
        'is_active' => rand(0, 1),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTime($max = 'now'),
        'updated_at' => $faker->dateTime($max = 'now'),
    ];
});
