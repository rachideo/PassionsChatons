<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Johny B Good',
            'email' => 'johny@b.good',
            'password' => bcrypt('johny'),
            'address_id_billing' => '3',
            'address_id_delivery' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Janis',
            'email' => 'janis@joplin.ca',
            'password' => bcrypt('janis'),
            'address_id_billing' => '2',
            'address_id_delivery' => '4'
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('azerty'),
            'address_id_billing' => '1',
            'address_id_delivery' => '1',
            'is_admin' => '1'
        ]);

    }
}
