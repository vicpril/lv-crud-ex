<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@address.ex',
            'password' => bcrypt('123'),
        ]);
      
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@address.ex',
            'password' => bcrypt('123'),
        ]);
    }
}
