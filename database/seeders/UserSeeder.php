<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
           "username"=>"User_with_bank_account",
           "income" => 140000,
            "employment_flag" => 1
        ]);

        DB::table('users')->insert([
            "username"=>"User_without_bank_account",
            "income" => 140000,
            "employment_flag" => 1
        ]);

    }
}
