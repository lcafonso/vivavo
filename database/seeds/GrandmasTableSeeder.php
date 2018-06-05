<?php

use Illuminate\Database\Seeder;

class GrandmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Grandma::create([
        	'local_id' => 1,
            'name' => 'Avo um',
            'slug' => str_slug('Avo um'),
            'excerpt' => 'Texto sobre a avo',
            'file' => 'URL da imagem'
        ]);

        App\Grandma::create([
        	'local_id' => 2,
            'name' => 'Avo dois',
            'slug' => str_slug('Avo dois'),
            'excerpt' => 'Texto sobre a avo',
            'file' => 'URL da imagem'
        ]);

    }
}
