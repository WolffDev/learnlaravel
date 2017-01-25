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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'role_id' => 1,
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'address' => $faker->address,
        'zipcode' => $faker->postcode,
        'city' => $faker->city,
        'phone' => 12345678,
        'age' => $faker->dateTime,
        'voice' => $faker->word,
        'experience' => $faker->word,
        'choir_type' => $faker->word,
        'job' => $faker->word,
        'relate' => $faker->word,
        'persona' => $faker->sentence,
        'user_status' => 1,
        'remember_token' => str_random(10),
    ];
});
