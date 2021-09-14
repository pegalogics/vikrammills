<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:25:27',
                'id' => 1,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '01c5d2d6671c9b438c5842bbdea79a638bd170ca1ebc2912fd2ae97c468663bd',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:25:27',
            ),
            1 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:25:54',
                'id' => 2,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'c951c1a38ee4a93aab7ff968ecd1b80116298d051478ef4a60c157b912b2d179',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:25:54',
            ),
            2 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:27:12',
                'id' => 3,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'b76dcb784c28925906244bce021f59aadfe839acebb790fa49d59f8b840b2428',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:27:12',
            ),
            3 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:27:27',
                'id' => 4,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '7ac89bf90063011add69d35dabbe6cc568741bfb79cbe6716ab6672735c4df41',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:27:27',
            ),
            4 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:28:13',
                'id' => 5,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '67f5ebe04d547e02a1f40ff7c1964b8d05e748a5581d24633b4d6b7ea3e0c200',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:28:13',
            ),
            5 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:30:32',
                'id' => 6,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'fabc29a19859928d98484efbbee628824e426ef00c0a52c650896fde96486ecb',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:30:32',
            ),
            6 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 13:31:31',
                'id' => 7,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '41d3b375aff5ad0f52c9b847d2d324ed0c7f9d99fede728480c79157ff759632',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 13:31:31',
            ),
            7 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 14:43:07',
                'id' => 8,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '8eb0a37224e0ce8b8ec0917ebcc857b3b8aa326c6e5bb811b7bd8c3bad073793',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 14:43:07',
            ),
            8 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 14:59:08',
                'id' => 9,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '1b5b0bbf1d12439c2187a7f7c68747e95890e46490a1824d51230e616cbd0b18',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 14:59:08',
            ),
            9 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 15:17:39',
                'id' => 10,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '03c99459f7f39f6559f246fedb7b29ae0b1cd71b8f49735d87dd4dea2ef355c6',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 15:17:39',
            ),
            10 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 15:22:34',
                'id' => 11,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '9bc5dee170f8e16d50f45b44db1495f0bd36d6a842aa3234f2ea2e17cc547d11',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 15:22:34',
            ),
            11 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 15:25:23',
                'id' => 12,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '30bd9ae0d4df9efefad483183e74d94447acb381828089476af31a235fb1d8db',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 15:25:23',
            ),
            12 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 15:26:35',
                'id' => 13,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '08f690c4bba976a499401f0c4e1cf66f72318a9e63a9f17c1e0f95504021ee87',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 15:26:35',
            ),
            13 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 15:41:09',
                'id' => 14,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '1b222e631f13ea1597014269d18b8d16088538762876f912eecfab9744286b0f',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 15:41:09',
            ),
            14 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 15:41:49',
                'id' => 15,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '58d7cd50b1fd028acd7b5995dfaae6c26a23c3e659c2c73bbac90ccfeb81bb72',
                'tokenable_id' => 5,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 15:41:49',
            ),
            15 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-11 16:30:15',
                'id' => 16,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '049b386a191ed9853da89b444d6774bcd22dd31788cf9087d24b796178f578b3',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-11 16:30:15',
            ),
            16 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 08:03:12',
                'id' => 17,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'c03c48f2604effc0ff3691e95f27764b92b3b5cc0c104831115e68e9ef98d7df',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 08:03:12',
            ),
            17 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 08:19:49',
                'id' => 18,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'cf5699359a2841e7ecb9799d84ff656c95dffea4c89aa830aac83cd0a266dbcf',
                'tokenable_id' => 7,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 08:19:49',
            ),
            18 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 08:21:06',
                'id' => 19,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '7612cfb210894237c61413ada0ab7220bd1b2d15486af1f3220ec03b039a04b4',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 08:21:06',
            ),
            19 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 08:27:40',
                'id' => 20,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'aa080381b0c6cfd05f02167922165638271947d253d2992ba76f287e8e0e8d62',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 08:27:40',
            ),
            20 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 11:16:20',
                'id' => 21,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'c1b121cbba18ad08ee929b0375a9c51310394b316076a5197b4ca8baef099f51',
                'tokenable_id' => 10,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 11:16:20',
            ),
            21 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 11:55:50',
                'id' => 22,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '52d7d191a2b1f825fcec33dde3882d8707c625793ec4ba1e39fdda66afd9806f',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 11:55:50',
            ),
            22 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 12:06:22',
                'id' => 23,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => 'f5464c0ea58bd16eb2787e6b12e8e5e5833298ea163f2c8fd0d97e3f2bdaecc1',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 12:06:22',
            ),
            23 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2021-09-13 12:09:44',
                'id' => 24,
                'last_used_at' => NULL,
                'name' => 'MyApp',
                'token' => '3cc55923899dc9e9c1ff63ab15da66c9aa9fd71cd8cb627508e808b20c17736c',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2021-09-13 12:09:44',
            ),
        ));
        
        
    }
}