<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DeveloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developers')->insert([
            ['DevID' => 88002, 'DevName' => "Fitri", 'DevLocation' => "Bukit Baru, Melaka", 'DevEmail' => "fitri@gmail.com", 'GameOwned' => '2'],
            ['DevID' => 11032, 'DevName' => "Khair", 'DevLocation' => "Ipoh, Perak", 'DevEmail' => "khair@gmail.com", 'GameOwned' => '1'],
            ['DevID' => 21229, 'DevName' => "Sara", 'DevLocation' => "Petaling Jaya, Selangor", 'DevEmail' => "sara@gmail.com", 'GameOwned' => '1'],
            ['DevID' => 20203, 'DevName' => "Natasya", 'DevLocation' => "Kuala Lumpur, Wilayah Persekutuan", 'DevEmail' => "natasya@gmail.com", 'GameOwned' => '1'],
            ['DevID' => 90201, 'DevName' => "Razif", 'DevLocation' => "Kuching, Sarawak", 'DevEmail' => "razif@gmail.com", 'GameOwned' => '1'],
            ['DevID' => 65434, 'DevName' => "Ahmed", 'DevLocation' => "Klang, Selangor", 'DevEmail' => "ahmed@gmail.com", 'GameOwned' => '2'],
            ['DevID' => 45504, 'DevName' => "Jameela", 'DevLocation' => "Butterworth, Pulau Pinang", 'DevEmail' => "jameela@gmail.com", 'GameOwned' => '1'],
        ]);
    }
}
