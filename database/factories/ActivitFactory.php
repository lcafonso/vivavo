<?php

use Faker\Generator as Faker;

$factory->define(App\Activit::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(200),
    ];
});
