<?php

use Illuminate\Database\Seeder;

class PoisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        App\Poi::create([
        	'local_id' => 1,	
			'name' => 'GrandmasHouse',
			'slug' => str_slug('GrandmasHouse'),
			'excerpt' => 'Casa da Avó',
			'latitude' => '41.4917142',
			'longitude' => '-7.1779117',
			'icon' => 'file:///android_asset/icon_maps.png',
			'image' => 'casaavo',
			'body' => 'A avó Maria da Graça é uma contadora inata de histórias'
        ]);

        App\Poi::create([
        	'local_id' => 1,
			'name' => 'TrilhoPartidamark',
			'slug' => str_slug('TrilhoPartidamark'),
			'excerpt' => 'Inicio do Trilho',
			'latitude' => '41.4814295',
			'longitude' => '-7.1851115',
			'icon' => 'file:///android_asset/icon_maps.png',
			'image' => 'iniciotrilho',
			'body' => 'Aqui inicia-se o trilho de Agrochao com 17km de caminha até o seu destino'
        ]);

        App\Poi::create([
        	'local_id' => 1,
			'name' => 'TrilhoFimmark',
			'slug' => str_slug('TrilhoFimmark'),
			'excerpt' => 'Fim do Trilho',
			'latitude' => '41.4835923',
			'longitude' => '-7.2400477',
			'icon' => 'file:///android_asset/icon_maps.png',
			'image' => 'fimtrilho',
			'body' => 'O trilho acaba nesta bela paisagem de Agrochao, perto do rio'
        ]);

        App\Poi::create([
        	'local_id' => 3,
			'name' => 'Ponte de Mirandela',
			'slug' => str_slug('Ponte de Mirandela'),
			'excerpt' => 'Ponte historica de Mirandela',
			'latitude' => '41.4833067',
			'longitude' => '-7.1879877',
			'icon' => 'file:///android_asset/icon_maps.png',
			'image' => 'pontemirandela',
			'body' => 'A Ponte sobre o rio Tua, conhecida também como Ponte Velha ou Ponte Medieval de Mirandela, é uma ponte de estilo românico que se localiza sobre o Rio Tua. Esta ponte é um ex-libris da cidade de Mirandela e é uma das três pontes que atravessam o Rio Tua, em Mirandela. A Ponte sobre o rio Tua está, desde 1910, classificada como Monumento nacional.'
        ]);

        App\Poi::create([
        	'local_id' => 3,
			'name' => 'Mercado',
			'slug' => str_slug('Mercado'),
			'excerpt' => 'Mercado de Mirandela',
			'latitude' => '41.4876932',
			'longitude' => '-7.1706125',
			'icon' => 'file:///android_asset/icon_maps.png',
			'image' => 'mercadomirandela',
			'body' => 'O Mercado de Mirandela é o típico local da cidade onde se vende de todos os produtos nacionais e estrangeiros. Está rodeado por um belo jardim, com bancos e sombras, um espaço infantil e um enorme painel de azulejos representativo das atividades agrícolas do concelho.'
        ]);
    }
}
