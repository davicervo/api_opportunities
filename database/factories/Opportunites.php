<?php

use Faker\Generator as Faker;
use App\Opportunites;

$factory->define(Opportunites::class, function (Faker $faker) {

    // rand values for contraction type
    $optionsCity = ['São Paulo-SP', 'Uberlândia-MG', 'Catanduva-SP'];
    $randIndex = array_rand($optionsCity);
    $city = $optionsCity[$randIndex];

    // rand values for contraction type
    $optionsContractionType = ['clt', 'pj', 'freelancer' ];
    $randIndex = array_rand($optionsContractionType);
    $contraction_type = $optionsContractionType[$randIndex];

    return [
        'opportunity' => $faker->name,
        'description' => $faker->text,
        'city' => $city,
        'contraction_type' => $contraction_type,
        'salary' => $faker->numberBetween(1500,10000),
        'status' => $faker->numberBetween(0,1),
        'contacted' => $faker->dateTime,
    ];
});
