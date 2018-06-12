<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
	$title = $faker->sentence(2);
	$start = $faker->dateTimeBetween('next Monday', 'next Monday +7 days');
	$grandma_id =  random_int(\DB::table('grandmas')->min('id'), \DB::table('grandmas')->max('id'));
	$local_id = \DB::table('grandmas')->select('local_id')->where('id', intval($grandma_id))->first();
    $local = \DB::table('locals')->select('name')->where('id', $local_id->local_id)->first();
    $min =  rand(1,10);
    $max =  rand($min+1,$min+11);

	return [
		'grandma_id' => $grandma_id,
        'name' => $title,
        'slug' => str_slug($title),
        'data_time' => $start,
        'local' => $local->name,
        'excerpt' => $faker->text(200),
        'body' => $faker->text(500),
        'file' => $faker->imageUrl($width = 1200, $height = 400),
        'amount' => $faker->randomFloat(2, 10, 200),
        'min_guests' => $min,
        'max_guests' => $max,
    ];
});

            