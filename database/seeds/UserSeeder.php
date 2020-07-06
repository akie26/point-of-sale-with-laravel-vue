<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Zwe Sithu',
            'email' => 'reachme@moon.com',
            'password' => bcrypt('password'),
        ]);
    }
}
