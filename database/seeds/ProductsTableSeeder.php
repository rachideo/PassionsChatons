<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Fiddle',
            'price' => 39900,
            'image' => 'images/Fiddle.jpg',
            'description' => 'Raised in the cozy atmosphere of Irish cottages, Fiddles are the best cuddlers ever who love to curl up next to fireplaces on cold winter nights.',
            'category_id'=> 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Mitten',
            'price' => 28900,
            'image' => 'images/Mitten.jpg',
            'description' => 'Mittens are small, fluffy kittens. They enjoy purring, stretching and scratching things. If you buy a mitten prepare to be ignored and to have your furniture destroyed.',
            'category_id'=> 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Strawberry 	',
            'price' => 59900,
            'image' => 'images/Strawberry.jpg',
            'description' => 'Strawberries suit their name very well . Just like the fruit, Strawberries are lovely and joyful! Always ready to take a nap, they are the cutest pets ever.',
            'category_id'=> 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Winky',
            'price' => 18900,
            'image' => 'images/Winky.jpg',
            'description' => 'In need for a sweet crazy hairy companion ? We got your back with this brand new product : Winky ! Low-cost but full of love and overloaded with cutteness.',
            'category_id'=> 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Floppy',
            'price' => 31900,
            'image' => 'images/Floppy.jpg',
            'description' => 'Floppy is a weird kitten which is always curious about anything. Don\'t be surprised if you find him under your pants while you are sitting on the toilet...',
            'category_id'=> 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Chocolate',
            'price' => 120000,
            'image' => 'images/Chocolate.jpg',
            'description' => 'Chocolate would make you drool! Terribly cute and elegant, Chocolate is the warmest friend.',
            'category_id'=> 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Chip',
            'price' => 120000,
            'image' => 'images/puppies/Col.jpg',
            'description' => 'A cute puppy.',
            'category_id'=> 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Fred',
            'price' => 10000,
            'image' => 'images/puppies/corgi.jpg',
            'description' => 'A cuter puppy.',
            'category_id'=> 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Fluff',
            'price' => 18000,
            'image' => 'images/puppies/GS.jpg',
            'description' => 'The cutest puppy.',
            'category_id'=> 2,
        ]);
    }
}
