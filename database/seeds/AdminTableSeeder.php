<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('123qweASD'),
            'name' => 'admin',
        ]);
    }
}
