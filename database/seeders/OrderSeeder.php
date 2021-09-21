<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->insert([
            'customer_id' => 1,
            'customer' => 'prashant',
            'status' => 'pending',
            'total' => '100',
            'payment_address' => 'address',
            'shipping_address' => 'address',
            'shipping_method' => 'phonePay',
            'created_at' => now(),
            'updated_at' => now(),
        ]);    
        \DB::table('orders')->insert([
            'customer_id' => 1,
            'customer' => 'prashant Singh',
            'status' => 'return',
            'total' => '100',
            'payment_address' => 'address',
            'shipping_address' => 'address',
            'shipping_method' => 'phonePay',
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
    }
}
