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
        factory(App\Activit::class, 10)->create();
    }
}
