<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;




class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker= fake();
         $users=User::all()->pluck('id')->toArray();



       DB::table('bank_accounts')->insert([
           "balance"=>33309,
           "user_id"=>$faker->randomElement($users)

       ]);

        DB::table('bank_accounts')->insert([
            "balance"=>0,
            "user_id"=>$faker->randomElement($users)

        ]);
    }
}
