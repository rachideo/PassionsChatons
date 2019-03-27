<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => '1',
            'address_id_billing' => '3',
            'address_id_delivery' => '3'
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'address_id_billing' => '3',
            'address_id_delivery' => '3'
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'address_id_billing' => '2',
            'address_id_delivery' => '4'
        ]);

        DB::table('orders')->insert([
            'user_id' => '1',
            'address_id_billing' => '3',
            'address_id_delivery' => '3'
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'address_id_billing' => '2',
            'address_id_delivery' => '4'
        ]);
    }
}
