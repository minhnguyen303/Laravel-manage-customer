<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;


class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 100; $i++){
            $customer = new Customer();
            $customer->id = $i;
            $customer->name = "customer $i";
            $customer->dob = "2018-09-26";
            $customer->email = "customer$i@codegym.vn";
            $customer->city_id = mt_rand(1, 4);
            $customer->save();
        }
    }
}
