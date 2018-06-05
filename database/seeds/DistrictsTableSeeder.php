<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\District::create([
        	'name' => 'Braganca',
        	'slug' => str_slug('Braganca')
        ]);
        App\District::create([
        	'name' => 'Vila Real',
        	'slug' => str_slug('Vila Real')
        ]);
    }
}
