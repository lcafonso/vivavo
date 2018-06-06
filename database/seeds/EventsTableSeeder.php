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
        factory(App\Event::class, 30)->create()->each(function(App\Event $event){
        	$event->activits()->attach([
        		rand(1,3),
        		rand(4,6),
        		rand(7,9),
        		rand(10,12),
        		rand(13,15)
        	]);
        });
    }
}
