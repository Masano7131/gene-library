<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'name' => 'genku',
            'email' => 'gmish318@gmail.com',
            'password' => bcrypt('genku'),
        ]);
    }
}
