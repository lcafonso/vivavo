<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Tag::class, 20)->create();

        App\Tag::create([
        	'name' => 'Community',
          'slug' => str_slug('Community'),
        ]);

        App\Tag::create([
          'name' => 'Trends',
          'slug' => str_slug('Trends'),
        ]);

        App\Tag::create([
          'name' => 'Food Trails',
          'slug' => str_slug('Food Trails'),
        ]);

        App\Tag::create([
          'name' => 'Slow Foods',
          'slug' => str_slug('Slow Foods'),
        ]);

        App\Tag::create([
          'name' => 'Seasional Foods',
          'slug' => str_slug('Seasional Foods'),
        ]);

        App\Tag::create([
          'name' => 'Old Times Flavours',
          'slug' => str_slug('Old Times Flavours'),
        ]);

        App\Tag::create([
          'name' => 'Localist',
          'slug' => str_slug('Localist'),
        ]);

        App\Tag::create([
          'name' => 'Authenticity',
          'slug' => str_slug('Authenticity'),
        ]);

        App\Tag::create([
          'name' => 'Local Culture',
          'slug' => str_slug('Local Culture'),
        ]);

        App\Tag::create([
          'name' => 'Food Quality (Healthy)',
          'slug' => str_slug('Food Quality (Healthy)'),
        ]);

        App\Tag::create([
          'name' => 'Tendencies',
          'slug' => str_slug('Tendencies'),
        ]);

        App\Tag::create([
          'name' => 'Culinary Story Telling',
          'slug' => str_slug('Culinary Story Telling'),
        ]);

        App\Tag::create([
          'name' => 'Food Experience',
          'slug' => str_slug('Food Experience'),
        ]);

    }
}
