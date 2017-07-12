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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'company' => $faker->company,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Plan::class, function($faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween($min = 100, $max = 999),
        'description' => $faker->sentence
    ];
});

$factory->define(App\Models\PlanBenefit::class, function($faker) {
    return [
        'plan_id' => function() {
            factory('App\Models\Plan')->create()->id;
        },
        'value' => $faker->sentence
    ];
});
