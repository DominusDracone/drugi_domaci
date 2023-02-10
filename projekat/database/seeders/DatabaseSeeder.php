<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Grad;
use \App\Models\User;
use \App\Models\Hotel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Grad::truncate();
        Hotel::truncate();

        Grad::factory(5)->create();

        \App\Models\User::factory(10)->create();


        \App\Models\User::factory()->create([
            'ime' => 'Test User',
            'email' => 'test@example.com',
        ]);

        

        Hotel::factory(3)->create();
    }
}
