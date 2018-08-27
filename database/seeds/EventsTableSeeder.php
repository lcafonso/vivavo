<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
        factory(App\Event::class, 29)->create()->each(function(App\Event $event){
        	$event->activits()->attach([
        		rand(1,3),
        		rand(4,6),
        		rand(7,9),
        		rand(10,12),
        		rand(13,15)
        	]);
        });
        **/

        App\Event::create([
            'grandma_id' => 2,
            'name' => 'Um Serão com as Histórias da Avó Lucinda',
            'slug' => str_slug('Um Serão com as Histórias da Avó Lucinda'),

            'data_time' => ("2018-06-15 14:30"),
            'local' => 'Vila Verde da Raia',

            'excerpt' => "Um evento criativo e delicioso na aldeia de Vila Verde da Raia. Um momento de aprendizagem, descontração e sabores únicos estão à sua espera. Vila Verde da Raia, Chaves, Rua das Flores, n.º 26, 5400-805 Vila Verde da Raia",

            'file1' => 'http://www.ipb.pt/~vivavo/public/uploads/IMG_8625.jpg',
            'file2' => 'http://www.ipb.pt/~vivavo/public/uploads/patri1_vila.png',
            'file3' => 'http://www.ipb.pt/~vivavo/public/uploads/patri2_vila.png',
            'file4' => 'http://www.ipb.pt/~vivavo/public/uploads/patri3_vila.png',
            'file5' => 'http://www.ipb.pt/~vivavo/public/uploads/patri4_vila.png',

            'body' => 'Ementa:
                Entradas: Folar, Pão Centeio e Bolinha de Manteiga;
                Jantar: Milhos com Couve Lombarda e Carne de Porco;
                Sobremesa: Leite de Creme

                Leve companhia e divirta-se!
                Delicie-se em cada dentada do maravilhoso folar da Avó Lucinda ou com os tradicionais milhos com couve lombarda. 
                Reserve a sua presença!
                Boas Experiências!',

            'amount' => 0,
            'min_guests' => 10, 
            'max_guests' => 15,

            'status' => 'CLOSE',

        ])->each(function(App\Event $event){
            $event->activits()->attach([
                1,
                2,
                3,
                4,
            ]);
        });

        DB::table('activit_event')->where('id',1)->update(['scheduled' => date('2018-06-15 14:30:00')]);
        DB::table('activit_event')->where('id',2)->update(['scheduled' => date('2018-06-15 15:00:00')]);
        DB::table('activit_event')->where('id',3)->update(['scheduled' => date('2018-06-15 18:00:00')]);
        DB::table('activit_event')->where('id',4)->update(['scheduled' => date('2018-06-15 19:00:00')]);


        App\Event::create([
            'grandma_id' => 1,
            'name' => 'Cantar dos Reis',
            'slug' => str_slug('Cantar dos Reis'),

            'data_time' => ("2017-11-06 20:00"),
            'local' => 'Agrochão',

            'excerpt' => "O evento foi constituído pelo acompanhamento dos habitantes da aldeia no Canto dos Reis, uma refeição partilhada na antiga escola primária da aldeia (jantar) que contou com a participação de vários moradores e por fim, uma encenação teatral. Uma experiência única e autêntica numa das mais bonitas regiões de Portugal.",

            'file1' => 'http://www.ipb.pt/~vivavo/public/uploads/evento2.jpg',
            'file2' => 'http://www.ipb.pt/~vivavo/public/uploads/teatro1_agro.png',
            'file3' => 'http://www.ipb.pt/~vivavo/public/uploads/teatro2_agro.png',
            'file4' => 'http://www.ipb.pt/~vivavo/public/uploads/teatro3_agro.png',
            'file5' => 'http://www.ipb.pt/~vivavo/public/uploads/teatro4_agro.png',

            'body' => 'O Cantar os Reis é uma prática poético-musical, realizada em coletivo, em espaços públicos e privados que ainda se celebra na aldeia de Agrochão, Vinhais. Esta manifestação celebrada na aldeia implica a participação de vários residentes. O ritual começa pela constituição dos grupos que anualmente se reúnem na tarde do dia 6 de janeiro sob a organização da Dona Maria da Graça. Os membros do grupo juntam-se no local habitual (Igreja de São Mamede) e o número de participantes varia de ano para ano. Sem ensaios ou combinações elaboradas, o grupo encontra-se de forma espontânea e rapidamente define as funções de cada um. Depois partem pelas arruadas, deslocando-se às casas e lá soltam o canto. Conhecedora do ritual, a Dona Maria da Graça é usualmente o elemento que assume o papel de porta-voz do grupo e tem a responsabilidade de manter viva a tradição transmitindo-a às novas gerações.',

            'amount' => 0,
            'min_guests' => 10, 
            'max_guests' => 15,

            'status' => 'CLOSE',

        ])->each(function(App\Event $event){
            $event->activits()->attach([
                5,
                6,
                7,
                8,
            ]);
        });

        DB::table('activit_event')->where('id',5)->update(['scheduled' => date('2017-11-06 14:30:00')]);
        DB::table('activit_event')->where('id',6)->update(['scheduled' => date('2017-11-06 15:00:00')]);
        DB::table('activit_event')->where('id',7)->update(['scheduled' => date('2017-11-06 18:30:00')]);
        DB::table('activit_event')->where('id',8)->update(['scheduled' => date('2017-11-06 21:00:00')]);


    }
}

