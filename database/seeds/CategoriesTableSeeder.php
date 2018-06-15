<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Category::class, 20)->create();
        
        App\Category::create([
        	'name' => 'Fotos',
            'slug' => str_slug('Fotos'),
            'body' => 'Fotos do projecto',
        ]);

        App\Category::create([
        	'name' => 'Vídeo',
            'slug' => str_slug('Vídeo'),
            'body' => 'Videos do projecto',
        ]);

        App\Category::create([
        	'name' => 'Notícias',
            'slug' => str_slug('Notícias'),
            'body' => 'Notícias do projecto',
        ]);

        App\Category::create([
        	'name' => 'Eventos',
            'slug' => str_slug('Eventos'),
            'body' => 'Eventos do projecto',
        ]);
        
    }
}
