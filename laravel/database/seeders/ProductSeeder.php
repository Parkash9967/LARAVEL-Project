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
                "gallery"=>" file:///C:/xampp/htdocs/LARAVEL-Project/laravel/Images/hu-galaxy-a10-a105-sm-a105fzbuxeh-frontblue-167281156.webp"
                
            ],
            [

                'name' => 'Oppo Moblie A3s',
                "price"=> "200",
                "category"=> "Mobile",
                "description"=>"A smartphone with 3GB RAM and more Features",
                "gallery"=>" C:/xampp/htdocs/LARAVEL-Project/laravel/Images/Oppo-A3s-Red.jpg"
                
            ],
            [

                'name' => 'LG TV',
                "price"=> "250",
                "category"=> "TV",
                "description"=>"A smarttv with more Features",
                "gallery"=>" file:///C:/xampp/htdocs/LARAVEL-Project/laravel/Images/7ad11219691a667e45a1437e161dd853.png"
                
            ],
            [

                'name' => 'dawlance fridge',
                "price"=> "400",
                "category"=> "fridge",
                "description"=>"A refrigerator with high quailty ",
                "gallery"=>" file:///C:/xampp/htdocs/LARAVEL-Project/laravel/Images/Galaxy-A60-featured-546x546.webp"
                
            ]
        ]);
    }
}
