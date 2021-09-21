<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2021-09-14 11:21:24',
                'id' => 3,
                'name' => 'Rice',
                'updated_at' => '2021-09-14 13:16:02',
            ),
            1 => 
            array (
                'created_at' => '2021-09-14 18:46:34',
                'id' => 4,
                'name' => 'Atta',
                'updated_at' => '2021-09-14 18:46:34',
            ),
            2 => 
            array (
                'created_at' => '2021-09-14 18:46:44',
                'id' => 5,
                'name' => 'Suji',
                'updated_at' => '2021-09-14 18:46:44',
            ),
            3 => 
            array (
                'created_at' => '2021-09-14 18:46:50',
                'id' => 6,
                'name' => 'Maida',
                'updated_at' => '2021-09-14 18:46:50',
            ),
            4 => 
            array (
                'created_at' => '2021-09-14 18:47:07',
                'id' => 7,
                'name' => 'Dalia',
                'updated_at' => '2021-09-14 18:47:07',
            ),
        ));
        
        
    }
}