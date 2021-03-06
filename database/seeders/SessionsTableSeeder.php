<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'NxM4zKh2ywuFY0tCiCumUayfPo1kcIV00UfQDUfk',
                'ip_address' => '127.0.0.1',
                'last_activity' => 1631990147,
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia2NKYW5iOWZ3VVFxaWUzSDgzbVRiT0dnbDVrSmVjUjcxbzdIa3NxayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMi9hZG1pbi9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36',
                'user_id' => NULL,
            ),
        ));
        
        
    }
}