<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
        factory(App\Post::class, 200)->create()->each(function(App\Post $post){
        	$post->tags()->attach([
        		rand(1,5),
        		rand(6,15),
        		rand(16,20),
        	]);
        });**/


        App\Post::create([
            'user_id'  => 1,
            'category_id' => 3,
            'name' => 'Público',
            'slug' => str_slug('Público'),
            'excerpt' => 'Público, Vista a Casa da Avó, Avós Transmontanas, Cantar dos Reis',
            'body' => 'O projeto Viv@vó já foi notícia em diversos meios de comunicação social. A primeira referência aconteceu no passado dia 05 de janeiro de 2018, na edição digital do Jornal Público, onde foi feita a divulgação do nosso primeiro evento “Cantar dos Reis”, realizado em Agrochão (Vinhais).
Veja/Leia a publicação, e venha conhecer um pouco sobre este evento de caracter único e com grande autenticidade.
Aceda em http://p3.publico.pt/actualidade/educacao/25286/vamos-visitar-casas-das-avos-de-vinhais',
           'status' => 'PUBLISHED',
            'file' => '',
        ])->each(function(App\Post $post){
            $post->tags()->attach([
              1,
              2,
              3,
            ]);
        });

        App\Post::create([
            'user_id'  => 1,
            'category_id' => 3,
            'name' => 'TSF',
            'slug' => str_slug('TSF'),
            'excerpt' => 'TSF, Visita a Casa da Avó, Avós Transmontanas, Cantar dos Reis',
            'body' => 'A edição digital da TSF fez no passado dia 05 de janeiro de 2018, referência ao nosso projeto. Esta referência conta com uma pequena explicação sobre o projeto dada pelo diretor da ESACT- IPB, Luís Pires.
Veja o que o diretor da ESACT-IPB diz sobre este projeto.
Aceda em https://www.tsf.pt/lusa/interior/politecnico-de-braganca-quer-levar-turistas-a-casa-das-avos-transmontanas-9026940.html',
           'status' => 'PUBLISHED',
            'file' => '',
        ])->each(function(App\Post $post){
            $post->tags()->attach([
              4,
              5,
              6,
            ]);
        });

        App\Post::create([
            'user_id'  => 1,
            'category_id' => 3,
            'name' => 'Diário de Notícias',
            'slug' => str_slug('Diário de Notícias'),
            'excerpt' => 'Diário de Notícias, Visita à Casa da Avó, Cantar dos Reis',
            'body' => 'Desta vez foi o Diário de Notícias que no passado dia 06 de janeiro de 2018 fez a divulgação do nosso primeiro evento, Cantar dos Reis", em Agrochão (Vinhais). Esta divulgação conta ainda com uma pequena explicação sobre o surgimento do projeto.
Venha conhecer um pouco mais sobre o surgimento do projeto.
Veja o que o diretor da ESACT-IPB diz sobre este projeto.
Aceda em https://www.dn.pt/lusa/interior/politecnico-de-braganca-quer-levar-turistas-a-casa-das-avos-transmontanas-9026939.html',
           'status' => 'PUBLISHED',
            'file' => '',
        ])->each(function(App\Post $post){
            $post->tags()->attach([
              7,
              8,
              9,
            ]);
        });

        App\Post::create([
            'user_id'  => 1,
            'category_id' => 3,
            'name' => 'Diário de Trás-os-Montes',
            'slug' => str_slug('Diário de Trás-os-Montes'),
            'excerpt' => 'Diário de Trás-os-Montes, Vista à Casa da Avó, Cantar dos Reis',
            'body' => 'Também o Diário de Trás-os-Montes fez referência a este projeto inovador. Esta referência aconteceu no passado dia 6 de janeiro de 2018, na edição digital, do referido jornal.
Fique a conhecer o que se propõe com este projeto.
Veja o que o diretor da ESACT-IPB diz sobre este projeto.
Aceda em http://www.diariodetrasosmontes.com/noticia/politecnico-de-braganca-quer-levar-turistas-casa-das-avos-transmontanas',
           'status' => 'PUBLISHED',
            'file' => 'http://www.diariodetrasosmontes.com/sites/default/files/styles/fullnode/public/agrochao2.jpg?itok=s1-GJbUe',
        ])->each(function(App\Post $post){
            $post->tags()->attach([
              10,
              11,
              12,
            ]);
        });


        App\Post::create([
            'user_id'  => 1,
            'category_id' => 3,
            'name' => 'Agora Nós (RTP1)',
            'slug' => str_slug('Agora Nós (RTP1)'),
            'excerpt' => 'Agora Nós (RTP1), Turismo, Avós',
            'body' => 'No dia 11 de janeiro de 2018, no programa “Agora Nós”, na RTP 1, Lucinda Veloso e Maria Graça, avós no Projeto Viv@vó, e Aida Carvalho e Ricardo Correia, investigadores no mesmo projeto, falaram sobre o surgimento, desenvolvimento e aplicação do projeto.
Vejam o que as nossas Avós têm a dizer através do link https://www.rtp.pt/play/p4223/e325320/agora-nos/629850',
           'status' => 'PUBLISHED',
            'file' => '',
        ])->each(function(App\Post $post){
            $post->tags()->attach([
              13,
              1,
              2,
            ]);
        });

        App\Post::create([
            'user_id'  => 1,
            'category_id' => 1,
            'name' => 'Gastronomia Local',
            'slug' => str_slug('Gastronomia Local'),
            'excerpt' => 'Gastronomia Local, Ritmo aldeia, Ritmo da Estação, Velhos Paladares, Autenticidade',
            'body' => 'Do lado de lá da faixa costeira no interior há uma região que por estar mais isolada, esconde uma longa história em tradição e costumes que têm perpetuado de geração em geração. No concelho Vinhais, existe a acolhedora aldeia de Agrochão. Aqui, os eventos sociais e culturais traduzem os ritmos próprios da natureza e da aldeia, costumes ancestrais enraizados, como as Festas de Natal e dos Reis. As manifestações etno-musicais são significativas pela sua identidade própria. A cozinha, tradicionalmente simples e genuína, tem sabores e aromas fortes. Na casa da "avó" Maria da Graça existe genuinidade nos produtos e no seu preparo. A simplicidade dos seus pratos parece satisfazer necessidades ancestrais mas também o da misteriosa satisfação de todos os sentidos. Tudo isto só é possível devido a ingredientes genuínos.
Quer saber um pouco mais sobre a cultura desta região?.
Veja as fotos através do link http://www.ipb.pt/~vivavo/public/uploads/IMG_8047.jpg , http://www.ipb.pt/~vivavo/public/uploads/Couves3.jpg',
           'status' => 'PUBLISHED',
            'file' => 'http://www.ipb.pt/~vivavo/public/uploads/IMG_8085.jpg',
        ])->each(function(App\Post $post){
            $post->tags()->attach([
              3,
              4,
              5,
            ]);
        });

    }
}
