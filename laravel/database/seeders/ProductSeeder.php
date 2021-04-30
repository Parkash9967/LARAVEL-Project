<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [

                'name' => 'Samsung Galaxy A10 (Dual SIM)',
                "price"=> "350",
                "category"=> "Mobile",
                "description"=>"A smartphone with 8GB RAM and more Features",
                "gallery"=>" http://127.0.0.1:8081/Images/7ad11219691a667e45a1437e161dd853.png"
                
            ],
            [

                'name' => 'Samsung Galaxy A60',
                "price"=> "250",
                "category"=> "Mobile",
                "description"=>"A smartphone with 6GB RAM and more Features",
                "gallery"=>" http://127.0.0.1:8081/Images/Galaxy-A60-featured-546x546.webp"
                
            ]
        ]);
    }
}
