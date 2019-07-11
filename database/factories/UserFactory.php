<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'position'=> $faker->randomElement($array = array ('accountant','lawyer','cashier','storekeeper','driver','cleaner','the secretary','Technical Specialist')),
        'employment_date'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'salary'=> $faker->numberBetween($min = 1000, $max = 2500),
        'parent_id'=> 0
    ];
});
