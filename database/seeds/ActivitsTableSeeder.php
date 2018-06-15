<?php

use Illuminate\Database\Seeder;

class ActivitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Activit::class, 15)->create();


        App\Activit::create([
            'name' => 'Concentração da equipa e dos convidados, na casa da Avó',
            'slug' => str_slug('Concentração da equipa e dos convidados, na casa da Avó'),
            'body' => 'Concentração da equipa e dos convidados, na casa da Avó',
        ]);
        App\Activit::create([
            'name' => 'Confeção de 12 pães centeio, 6 folares e uma bolinha de manteiga',
            'slug' => str_slug('Confeção de 12 pães centeio, 6 folares e uma bolinha de manteiga'),
            'body' => 'Confeção de 12 pães centeio, 6 folares e uma bolinha de manteiga',
        ]);
        App\Activit::create([
            'name' => 'Preparação do jantar com a Avó',
            'slug' => str_slug('Preparação do jantar com a Avó'),
            'body' => 'Preparação do jantar com a Avó',
        ]);
        App\Activit::create([
            'name' => 'Jantar na cozinha regional da Avó',
            'slug' => str_slug('Jantar na cozinha regional da Avó'),
            'body' => 'Jantar na cozinha regional da Avó',
        ]);   

    }

}
