<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Hadiid Andri Yulison',
            'nba' => '05.06.64192',
            'email' => 'hadiidandri2000@gmail.com',
            'password' => bcrypt('hadiidandriy12'),
        ]);
    }
}

