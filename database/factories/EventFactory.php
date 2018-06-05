<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
	$title = $faker->sentence(2);
	$start = $faker->dateTimeBetween('next Monday', 'next Monday +7 days');
	$grandma_id =  random_int(\DB::table('grandmas')->min('id'), \DB::table('grandmas')->max('id'));
	$local_id = \DB::table('grandmas')->select('local_id')->where('id', intval($grandma_id))->get();
    $local = \DB::table('locals')->select('name')->where('id', intval(strval($local_id)))->get();
	return [
		'grandma_id' => $grandma_id,
        'name' => $title,
        'slug' => str_slug($title),
        'data_time' => $start,
        'local' => var_dump($local_id),
        'excerpt' => $faker->text(200),
        'body' => $faker->text(500),
        'file' => $faker->imageUrl($width = 1200, $height = 400),
    ];
});

            