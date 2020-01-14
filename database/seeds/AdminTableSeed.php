<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'mrinalmallik1@gmail.com',
            'password' => bcrypt('123456789'),
            'remember_token' => str_random(10),
        ]);
    }
}
