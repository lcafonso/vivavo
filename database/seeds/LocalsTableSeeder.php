<?php

use Illuminate\Database\Seeder;

class LocalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Local::create([ 
			'district_id' => 1,
			'name' => 'Agrochão', 
			'slug' => str_slug('Agrochão'), 
			'body' => '']);

		App\Local::create([ 
			'district_id' => 1,
			'name' => 'Mirandela', 
			'slug' => str_slug('Mirandela'), 
			'body' => '']);

		App\Local::create([ 
			'district_id' => 2,
			'name' => 'Vila Verde da Raia', 
			'slug' => str_slug('Vila Verde da Raia'), 
			'body' => '']);
	
    }
}
