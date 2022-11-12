<?php

namespace Database\Seeders;

use App\Models\Citizen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citizen::insert([
            [ 'full_name' => 'Basil Ikpe', 'gender' => 'male', 'address' => 'Yaba, Lagos', 'phone' => '07023456', 'ward_id' => 7, 'state_id' => 2, 'lga_id' => 4],
            [ 'full_name' => 'April John', 'gender' => 'female', 'address' => 'Yaba, Lagos', 'phone' => '017023456', 'ward_id' => 6, 'state_id' => 2, 'lga_id' => 4],
            [ 'full_name' => 'Akan Phil', 'gender' => 'female', 'address' => 'Ikeja, Lagos', 'phone' => '071023456', 'ward_id' => 1, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'Basil Sunday', 'gender' => 'male', 'address' => 'Agege, Lagos', 'phone' => '027023456', 'ward_id' => 2, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'Yusuf Adesuwa', 'gender' => 'male', 'address' => 'Bariga, Lagos', 'phone' => '047023456', 'ward_id' => 3, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'Oliade John', 'gender' => 'female', 'address' => 'Mushin, Lagos', 'phone' => '037023456', 'ward_id' => 6, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'Ivie Ohenhen', 'gender' => 'male', 'address' => 'Ketu, Lagos', 'phone' => '027023456', 'ward_id' => 1, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'Felicia Ekpo', 'gender' => 'female', 'address' => 'Ogba, Lagos', 'phone' => '067023456', 'ward_id' => 2, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'June Ikpong', 'gender' => 'male', 'address' => 'Lekki, Lagos', 'phone' => '0770253456', 'ward_id' => 5, 'state_id' => 2, 'lga_id' => 4],
           [ 'full_name' => 'Monica Ushie', 'gender' => 'female', 'address' => 'Epe, Lagos', 'phone' => '078023456', 'ward_id' => 3, 'state_id' => 2, 'lga_id' => 4],
        ]);
    }
}
