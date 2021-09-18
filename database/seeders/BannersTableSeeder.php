<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'banner' => 'banner.jpg',
                'created_at' => '2021-09-18 13:25:38',
                'id' => 1,
                'updated_at' => '2021-09-18 13:55:30',
            ),
        ));
        
        
    }
}