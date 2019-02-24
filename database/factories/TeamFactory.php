<?php

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

$factory->define(\App\Team::class, function (Faker $faker) {
    $storage_path = storage_path() . '/app/public/images/teams';
    $x = 1;
    $number = $x + 1;
    $country = [
        'India',
        'Pakistan',
        'Shri Lanka',
        'Australia',
        'England',
        'New Zeeland',
        'West Indies',
        'South Africa'
    ];
    $country_random_keys = array_rand($country);
    return [
        'name' => $country[$country_random_keys],
        'flag' => 'images/teams/'.$faker->image($storage_path, 400, 300, 'cats', false),
        'rank' => $number,
    ];
});
