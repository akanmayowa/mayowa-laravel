<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            [ 'name' => 'CROSS RIVER' ],
            [ 'name' => 'LAGOS' ],
            [ 'name' => 'OGUN' ],
            [ 'name' => 'EDO' ],
            [ 'name' => 'ONDO' ],
            [ 'name' => 'OYO' ],
            [ 'name' => 'DELTA' ],
            [ 'name' => 'IMO' ],
            [ 'name' => 'NIGER' ],
            [ 'name' => 'KANO' ],
            [ 'name' => 'TARABA' ],
        ]);
    }
}
