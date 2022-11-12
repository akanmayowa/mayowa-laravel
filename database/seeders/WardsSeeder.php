<?php

namespace Database\Seeders;

use App\Models\Wards;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wards::insert([
            ['name' => 'WARD 1 WEST', 'lga_id' => 3 ],
            ['name' => 'WARD 3 WEST', 'lga_id' => 4 ],
            ['name' => 'WARD 2 NORTH', 'lga_id' => 5 ],
            ['name' => 'WARD 1 EAST', 'lga_id' => 6 ],
            ['name' => 'CENTRAL WARD 3', 'lga_id' => 2 ],
            ['name' => 'CENTRAL WARD4', 'lga_id' => 1 ],
            ['name' => 'WARD 2', 'lga_id' => 1 ],
            ['name' => 'WARD 5', 'lga_id' => 7 ],
        ]);
    }
}
