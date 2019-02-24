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

$factory->define(\App\Player::class, function (Faker $faker) {
    $storage_path = storage_path() . '/app/public/images/players';
    $x = 1;
    $number = $x + 1;
    $headness = ['left', 'right'];
    $speciality = ['allrounder', 'batsman', 'wicketkeeper', 'bowler-seam-fast'];
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
    $headness_random_keys = array_rand($headness);
    $speciality_random_keys = array_rand($speciality);
    $country_random_keys = array_rand($country);
    return [
        'team_id' => \App\Team::inRandomOrder()->first()->id,
        'name' => $faker->name,
        'handedness' => $headness[$headness_random_keys],
        'speciality' => $speciality[$speciality_random_keys],
        'country' => $country[$country_random_keys],
        'nationality' => $country[$country_random_keys],
        'photo' => 'images/players/'.$faker->image($storage_path, 400, 300, 'cats', false),
        'rank' => $number,
    ];
});
