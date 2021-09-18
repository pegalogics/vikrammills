<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'created_at' => '2021-09-18 09:55:58',
                'customer' => 'prashant',
                'customer_id' => '1',
                'discount' => NULL,
                'id' => 1,
                'payment_address' => 'address',
                'shipping_address' => 'address',
                'shipping_method' => 'phonePay',
                'status' => 'pending',
                'total' => 100,
                'updated_at' => '2021-09-18 09:55:58',
            ),
            1 => 
            array (
                'created_at' => '2021-09-18 09:55:58',
                'customer' => 'prashant Singh',
                'customer_id' => '1',
                'discount' => NULL,
                'id' => 2,
                'payment_address' => 'address',
                'shipping_address' => 'address',
                'shipping_method' => 'phonePay',
                'status' => 'return',
                'total' => 100,
                'updated_at' => '2021-09-18 09:55:58',
            ),
        ));
        
        
    }
}