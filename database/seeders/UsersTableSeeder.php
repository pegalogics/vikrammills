<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2021-09-11 10:00:22',
                'current_team_id' => NULL,
                'email' => 'prashantsingh2408@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'mobile' => NULL,
                'name' => 'prashant singh',
                'password' => '5f4dcc3b5aa765d61d8327deb882cf99',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-11 10:00:22',
            ),
            1 => 
            array (
                'created_at' => '2021-09-11 13:06:47',
                'current_team_id' => NULL,
                'email' => 'prashant24082@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'mobile' => NULL,
                'name' => 'prashant singh',
                'password' => '5f4dcc3b5aa765d61d8327deb882cf99',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-11 13:06:47',
            ),
            2 => 
            array (
                'created_at' => '2021-09-11 13:11:05',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24084@gmail.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'mobile' => NULL,
                'name' => 'prashant2 prashant',
                'password' => '5f4dcc3b5aa765d61d8327deb882cf99',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-11 13:11:05',
            ),
            3 => 
            array (
                'created_at' => '2021-09-11 15:41:34',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24082@gmail.com',
                'email_verified_at' => NULL,
                'id' => 5,
                'mobile' => NULL,
                'name' => 'prashant2 prashant',
                'password' => '5f4dcc3b5aa765d61d8327deb882cf99',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-11 15:41:34',
            ),
            4 => 
            array (
                'created_at' => '2021-09-13 08:04:24',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24083@gmail.com',
                'email_verified_at' => NULL,
                'id' => 6,
                'mobile' => NULL,
                'name' => 'prashant3 singh3',
                'password' => '5f4dcc3b5aa765d61d8327deb882cf99',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-13 08:04:24',
            ),
            5 => 
            array (
                'created_at' => '2021-09-13 08:19:28',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24085@gmail.com',
                'email_verified_at' => NULL,
                'id' => 7,
                'mobile' => NULL,
                'name' => 'prashant5 singh5',
                'password' => '5f4dcc3b5aa765d61d8327deb882cf99',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-13 08:19:28',
            ),
            6 => 
            array (
                'created_at' => '2021-09-13 08:21:45',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24087@gmail.com',
                'email_verified_at' => NULL,
                'id' => 8,
                'mobile' => NULL,
                'name' => 'prashant7 singh7',
                'password' => '83878c91171338902e0fe0fb97a8c47a',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-13 08:21:45',
            ),
            7 => 
            array (
                'created_at' => '2021-09-13 08:27:12',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24088@gmail.com',
                'email_verified_at' => NULL,
                'id' => 9,
                'mobile' => NULL,
                'name' => 'prashant8 singh8',
                'password' => '292bec9112e8d0eaf67d895f020f2dab',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-13 08:27:12',
            ),
            8 => 
            array (
                'created_at' => '2021-09-13 11:15:33',
                'current_team_id' => NULL,
                'email' => 'prashantsingh24089@gmail.com',
                'email_verified_at' => NULL,
                'id' => 10,
                'mobile' => NULL,
                'name' => 'prashant9 singh9',
                'password' => '6445071763f7fa0b814c0317a19397da',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-13 11:15:33',
            ),
            9 => 
            array (
                'created_at' => '2021-09-14 13:09:50',
                'current_team_id' => NULL,
                'email' => 'lokesh@pegalogics.com',
                'email_verified_at' => NULL,
                'id' => 11,
                'mobile' => NULL,
                'name' => 'Lokesh Dewangan',
                'password' => '48e959d35feafde79e174747076efe8c',
                'pic' => NULL,
                'remember_token' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2021-09-14 13:09:50',
            ),
        ));
        
        
    }
}