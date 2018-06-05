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
            'name' => 'Maria da Graça Vaz Afonso',
            'slug' => str_slug('Maria da Graça Vaz Afonso'),
            'excerpt' => 'Olá, o meu nome é Maria da Graça, tenho 76 anos de idade, sou natural de Agrochão e estou aposentada da Função Pública. Fui professora primária em quase todo o distrito de Bragança e terminei a minha carreira em Agrochão. Atualmente sou secretária do Centro Social e Paroquial de S. Mamede de Agrochão e já fui diretora da associação cultural, recreativa e desportiva de Agrochão.
Entrei neste projeto porque me orgulho das minhas raízes culturais e quero manter vivos os usos e costumes desta linda aldeia do concelho de Vinhais.',
            'file' => 'URL da imagem'
        ]);

        App\Grandma::create([
        	'local_id' => 2,
            'name' => 'Lucinda Veloso',
            'slug' => str_slug('Lucinda Veloso'),
            'excerpt' => 'Boa tarde, o meu nome é Lucinda Veloso, tenho 60 anos de idade, sou natural de Vila Verde da Raia e sou doméstica. Vivo rodeada de afeto e ternura com o meu marido e a minha mãe. Os meus filhos residem no Porto e em Lisboa.
Sempre cresci nesta bela aldeia, por isso, sou conhecedora/contadora de muitas histórias em que aldeia era palco de grandes acontecimentos, na época do contrabando.',
            'file' => 'URL da imagem'
        ]);

    }
}
