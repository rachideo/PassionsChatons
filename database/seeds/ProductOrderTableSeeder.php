<?php

use Illuminate\Database\Seeder;

class ProductOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_order')->insert([
            'order_id' => '1',
            'product_id' => '3',
            'quantity' => '4'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '1',
            'product_id' => '8',
            'quantity' => '1'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '1',
            'product_id' => '4',
            'quantity' => '3'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '2',
            'product_id' => '5',
            'quantity' => '2'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '2',
            'product_id' => '9',
            'quantity' => '7'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '3',
            'product_id' => '6',
            'quantity' => '6'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '4',
            'product_id' => '1',
            'quantity' => '13'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '4',
            'product_id' => '7',
            'quantity' => '5'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '4',
            'product_id' => '8',
            'quantity' => '9'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '4',
            'product_id' => '4',
            'quantity' => '3'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '5',
            'product_id' => '1',
            'quantity' => '5'
        ]);

        DB::table('product_order')->insert([
            'order_id' => '5',
            'product_id' => '7',
            'quantity' => '12'
        ]);
    }
}
