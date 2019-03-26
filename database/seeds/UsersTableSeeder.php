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
            'password' => bcrypt('secret'),
        ]);
    }
}