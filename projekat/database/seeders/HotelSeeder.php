<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'ime'=>"Hilton",
            'brZvezdica'=>"5"
            
        ]);

        Hotel::create([
            'ime'=>"Hajat",
            'brZvezdica'=>"5"
        ]);

        Hotel::create([
            'ime'=>"Ćira",
            'brZvezdica'=>"3"
        ]);
    }
}
