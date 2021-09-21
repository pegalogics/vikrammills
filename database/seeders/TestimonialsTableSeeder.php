<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'created_at' => '2021-09-14 19:18:55',
                'id' => 3,
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
                'name' => 'Lokesh',
                'pic' => 'passpost-size-lokesh.png',
                'updated_at' => '2021-09-14 18:26:53',
            ),
            1 => 
            array (
                'created_at' => '2021-09-14 20:35:29',
                'id' => 4,
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',
                'name' => 'Mayank Dewangan',
                'pic' => 'lokesh2.png',
                'updated_at' => '2021-09-14 20:35:29',
            ),
            2 => 
            array (
                'created_at' => '2021-09-14 20:36:15',
                'id' => 5,
                'message' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type',
                'name' => 'Lokesh Kumar',
                'pic' => 'lokesh.png',
                'updated_at' => '2021-09-14 20:36:15',
            ),
        ));
        
        
    }
}