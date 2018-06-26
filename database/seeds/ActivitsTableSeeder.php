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

        App\Activit::create([
            'name' => 'Concentração dos visitantes no centro da aldeia',
            'slug' => str_slug('Concentração dos visitantes no centro da aldeia'),
            'body' => 'Concentração dos visitantes no centro da aldeia',
        ]); 
        App\Activit::create([
            'name' => 'Acompanhamento dos habitantes no cantar dos reis',
            'slug' => str_slug('Acompanhamento dos habitantes no cantar dos reis'),
            'body' => 'Acompanhamento dos habitantes no cantar dos reis',
        ]); 
        App\Activit::create([
            'name' => 'Jantar na Antiga escola primaria da aldeia',
            'slug' => str_slug('Jantar na Antiga escola primaria da aldeia'),
            'body' => 'Ementa: Entradas - Produtos regionais (Chouriça, Aleiras, Bola); Jantar - Colves guizadas com frando; Sobremesa: Bolo de maça e nozes, Bolo de sertã, Aletria, Pudim el mandarim, Pudim De Ovos, Filhos de Maça, Bolo de Iorgute',
        ]); 
        App\Activit::create([
            'name' => 'Teatro popular',
            'slug' => str_slug('Teatro popular'),
            'body' => 'Animação realizada pelos habitantes da aldeia',
        ]);    

    }

}
