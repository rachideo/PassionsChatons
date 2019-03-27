<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'streetNumber' => '21',
            'streetName' => 'Jump Street',
            'zipcode' => '90001',
            'city' => 'Los Angeles',
            'country'=> 'United States',
        ]);

        DB::table('addresses')->insert([
            'streetNumber' => '36',
            'streetName' => 'Quai des Orfèvres',
            'zipcode' => '75000',
            'city' => 'Paris',
            'country'=> 'France',
        ]);

        DB::table('addresses')->insert([
            'streetNumber' => '178',
            'streetName' => 'Entreprise Road, Lewisam',
            'zipcode' => '263',
            'city' => 'Harare',
            'country'=> 'Zimbabwe',
        ]);

        DB::table('addresses')->insert([
            'streetNumber' => '2',
            'streetName' => 'Avenue de Louisiane',
            'zipcode' => '38120',
            'city' => 'Fontanil-Cornillon',
            'country'=> 'France',
        ]);
    }
}
