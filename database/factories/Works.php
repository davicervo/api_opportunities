<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Works;

$factory->define(Works::class, function (Faker $faker) {
   // rand values for contraction type
   $optionsPosition = ['administração', 'analista_de_sistemas', 'analista_de_testes', 'desenvolvedor', 'marketing', 'product_owner', 'recursos_humanos', 'scrum_master', 'ux_designer', 'vendas'];
   $randIndex = array_rand($optionsPosition);
   $position = $optionsPosition[$randIndex];

   // rand values for contraction type
   $optionsStatus = ['contacted', 'no_answered', 'waiting'];
   $randIndex = array_rand($optionsStatus);
   $status = $optionsStatus[$randIndex];

   return [
       'name' => $faker->name,
       'working_at_moment' => $faker->numberBetween(0,1),
       'if_yes_working_at_moment' => $faker->text,
       'position' => $position,
       'pj' => $faker->numberBetween(0,1),
       'salary' => $faker->numberBetween(5000,15000),
       'email' => $faker->email,
       'status' => $status,
       'contacted' => $faker->dateTime,
   ];
});
