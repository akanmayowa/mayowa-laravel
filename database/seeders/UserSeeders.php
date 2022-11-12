<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [
               'email' => 'akanmayowa@yahoo.com',
               'name' => 'admin01',
               'password' => Hash::make('123456'),
               'user_role' => 'admin'
           ],
            [
                'email' => 'basilikpe@yahoo.com',
                'name' => 'admin02',
                'password' => Hash::make('123456'),
                'user_role' => 'admin'
            ],
        ]);
    }
}
