<?php

namespace Database\Seeders;

use App\Models\LGAs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LGASeeders extends Seeder
{

    public function run()
    {
        LGAs::insert([
            ['name' => 'CALABAR SOUTH', 'state_id' => 1],
            ['name' => 'ETIOSA', 'state_id' => 2],
            ['name' => 'LAGOS MAINLAND', 'state_id' => 3],
            ['name' => 'CALABAR MUNICIPAL', 'state_id' => 1],
            ['name' => 'EDO WEST', 'state_id' => 4],
            ['name' => 'OVIA NORTH', 'state_id' => 3],
            ['name' => 'AUCHI SOUTH', 'state_id' => 1],
            ['name' => 'IBADAN CENTRAL', 'state_id' => 6],
            ['name' => 'SAPELE NORTH', 'state_id' => 7],
            ['name' => 'ASABA SOUTH', 'state_id' => 7],
        ]);
    }
}
