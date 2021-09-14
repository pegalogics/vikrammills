<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'admin',
                'password' => 'password',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}