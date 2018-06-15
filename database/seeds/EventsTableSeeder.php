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
            'file' => 'http://www.ipb.pt/~vivavo/public/uploads/IMG_8625.jpg',
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


    }
}

