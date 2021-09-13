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
                'id' => 'tIAUcPMIuhP8ug2rej2cvLdTHcJz7neK4KqBSf4W',
                'ip_address' => '127.0.0.1',
                'last_activity' => 1631526507,
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYXlxRmRiTTY4R0hyc2NidHE2dWNnM2Ftc24xOHlBSTRUZGVUVFNwOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NDoidXNlciI7TzoxNToiQXBwXE1vZGVsc1xVc2VyIjozMDp7czoxMToiACoAZmlsbGFibGUiO2E6Mzp7aTowO3M6NDoibmFtZSI7aToxO3M6NToiZW1haWwiO2k6MjtzOjg6InBhc3N3b3JkIjt9czo5OiIAKgBoaWRkZW4iO2E6NDp7aTowO3M6ODoicGFzc3dvcmQiO2k6MTtzOjE0OiJyZW1lbWJlcl90b2tlbiI7aToyO3M6MjU6InR3b19mYWN0b3JfcmVjb3ZlcnlfY29kZXMiO2k6MztzOjE3OiJ0d29fZmFjdG9yX3NlY3JldCI7fXM6ODoiACoAY2FzdHMiO2E6MTp7czoxNzoiZW1haWxfdmVyaWZpZWRfYXQiO3M6ODoiZGF0ZXRpbWUiO31zOjEwOiIAKgBhcHBlbmRzIjthOjE6e2k6MDtzOjE3OiJwcm9maWxlX3Bob3RvX3VybCI7fXM6MTM6IgAqAGNvbm5lY3Rpb24iO3M6NToibXlzcWwiO3M6ODoiACoAdGFibGUiO3M6NToidXNlcnMiO3M6MTM6IgAqAHByaW1hcnlLZXkiO3M6MjoiaWQiO3M6MTA6IgAqAGtleVR5cGUiO3M6MzoiaW50IjtzOjEyOiJpbmNyZW1lbnRpbmciO2I6MTtzOjc6IgAqAHdpdGgiO2E6MDp7fXM6MTI6IgAqAHdpdGhDb3VudCI7YTowOnt9czoxOToicHJldmVudHNMYXp5TG9hZGluZyI7YjowO3M6MTA6IgAqAHBlclBhZ2UiO2k6MTU7czo2OiJleGlzdHMiO2I6MTtzOjE4OiJ3YXNSZWNlbnRseUNyZWF0ZWQiO2I6MDtzOjEzOiIAKgBhdHRyaWJ1dGVzIjthOjEzOntzOjI6ImlkIjtpOjE7czo0OiJuYW1lIjtzOjE0OiJwcmFzaGFudCBzaW5naCI7czo1OiJlbWFpbCI7czoyNzoicHJhc2hhbnRzaW5naDI0MDhAZ21haWwuY29tIjtzOjE3OiJlbWFpbF92ZXJpZmllZF9hdCI7TjtzOjY6Im1vYmlsZSI7TjtzOjg6InBhc3N3b3JkIjtzOjMyOiI1ZjRkY2MzYjVhYTc2NWQ2MWQ4MzI3ZGViODgyY2Y5OSI7czoxNzoidHdvX2ZhY3Rvcl9zZWNyZXQiO047czoyNToidHdvX2ZhY3Rvcl9yZWNvdmVyeV9jb2RlcyI7TjtzOjE0OiJyZW1lbWJlcl90b2tlbiI7TjtzOjE1OiJjdXJyZW50X3RlYW1faWQiO047czoxODoicHJvZmlsZV9waG90b19wYXRoIjtOO3M6MTA6ImNyZWF0ZWRfYXQiO3M6MTk6IjIwMjEtMDktMTEgMTA6MDA6MjIiO3M6MTA6InVwZGF0ZWRfYXQiO3M6MTk6IjIwMjEtMDktMTEgMTA6MDA6MjIiO31zOjExOiIAKgBvcmlnaW5hbCI7YToxMzp7czoyOiJpZCI7aToxO3M6NDoibmFtZSI7czoxNDoicHJhc2hhbnQgc2luZ2giO3M6NToiZW1haWwiO3M6Mjc6InByYXNoYW50c2luZ2gyNDA4QGdtYWlsLmNvbSI7czoxNzoiZW1haWxfdmVyaWZpZWRfYXQiO047czo2OiJtb2JpbGUiO047czo4OiJwYXNzd29yZCI7czozMjoiNWY0ZGNjM2I1YWE3NjVkNjFkODMyN2RlYjg4MmNmOTkiO3M6MTc6InR3b19mYWN0b3Jfc2VjcmV0IjtOO3M6MjU6InR3b19mYWN0b3JfcmVjb3ZlcnlfY29kZXMiO047czoxNDoicmVtZW1iZXJfdG9rZW4iO047czoxNToiY3VycmVudF90ZWFtX2lkIjtOO3M6MTg6InByb2ZpbGVfcGhvdG9fcGF0aCI7TjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDIxLTA5LTExIDEwOjAwOjIyIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDIxLTA5LTExIDEwOjAwOjIyIjt9czoxMDoiACoAY2hhbmdlcyI7YTowOnt9czoxNzoiACoAY2xhc3NDYXN0Q2FjaGUiO2E6MDp7fXM6ODoiACoAZGF0ZXMiO2E6MDp7fXM6MTM6IgAqAGRhdGVGb3JtYXQiO047czoxOToiACoAZGlzcGF0Y2hlc0V2ZW50cyI7YTowOnt9czoxNDoiACoAb2JzZXJ2YWJsZXMiO2E6MDp7fXM6MTI6IgAqAHJlbGF0aW9ucyI7YTowOnt9czoxMDoiACoAdG91Y2hlcyI7YTowOnt9czoxMDoidGltZXN0YW1wcyI7YjoxO3M6MTA6IgAqAHZpc2libGUiO2E6MDp7fXM6MTA6IgAqAGd1YXJkZWQiO2E6MTp7aTowO3M6MToiKiI7fXM6MjA6IgAqAHJlbWVtYmVyVG9rZW5OYW1lIjtzOjE0OiJyZW1lbWJlcl90b2tlbiI7czoxNDoiACoAYWNjZXNzVG9rZW4iO047fX0=',
            'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36',
                'user_id' => NULL,
            ),
        ));
        
        
    }
}