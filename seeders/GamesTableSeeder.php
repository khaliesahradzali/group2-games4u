<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([ 
            'name' => 'Need No Speed',
            'slug' => 'need-no-speed', 
            'category' => 'Racing', 
            'price' => 78,  
            'DevID' => '11032',
            'image_path' => 'need-no-speed.jpg'

        ]);

        DB::table('games')->insert([ 
            'name' => 'Farm Villain',
            'slug' => 'farm-villain', 
            'category' => 'Arcade', 
            'price' => 35,  
            'DevID' => '90201',
            'image_path' => 'farm-villain.jpg'

        ]);

        DB::table('games')->insert([ 
            'name' => 'Risk Of Rain',
            'slug' => 'risk-of-rain', 
            'category' => 'Arcade', 
            'price' => 56,  
            'DevID' => '65434',
            'image_path' => 'risk-of-rain.jpg'

        ]); 

        DB::table('games')->insert([ 
            'name' => 'Free Fire',
            'slug' => 'free-fire', 
            'category' => 'Shooting', 
            'price' => 120,  
            'DevID' => '21229',
            'image_path' => 'free-fire.jpg'

        ]);    
            
        DB::table('games')->insert([ 
            'name' => 'Snipe Or Die',
            'slug' => 'snipe-or-die', 
            'category' => 'RPG', 
            'price' => 49,  
            'DevID' => '65434',
            'image_path' => 'snipe-or-die.jpg'

        ]);
            
        DB::table('games')->insert([ 
            'name' => 'CS: Stop',
            'slug' => 'cs-stop', 
            'category' => 'Shooting', 
            'price' => 63,  
            'DevID' => '88002',
            'image_path' => 'cs-stop.jpg'

        ]);  

        DB::table('games')->insert([ 
            'name' => 'Devil May Die',
            'slug' => 'devil-may-die', 
            'category' => 'Action', 
            'price' => 102,  
            'DevID' => '20203',
            'image_path' => 'devil-may-die.jpg'

        ]);
            
        DB::table('games')->insert([ 
            'name' => 'HOLO',
            'slug' => 'holo', 
            'category' => 'Racing', 
            'price' => 45,  
            'DevID' => '88002',
            'image_path' => 'holo.jpg'

        ]);
            
        DB::table('games')->insert([ 
            'name' => 'FIFE 2017',
            'slug' => 'fife-2017', 
            'category' => 'Arcade', 
            'price' => 89,  
            'DevID' => '45504',
            'image_path' => 'fife-2017.jpg'

        ]);    

            
    }
}
