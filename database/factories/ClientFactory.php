<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Client;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prenom' => $faker->name,

        'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        'entreprise' => $faker->name,
        'poste' => $faker->name,
        'telephone' => Str::random(17),

        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
