<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 9)->create();

        App\User::create([
        	'name' => 'Luis Afonso',
        	'email' => 'lafonso@ipb.pt',
        	'password' => bcrypt('123')
        ]);
    }
}
