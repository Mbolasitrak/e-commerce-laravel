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
        //
        DB::table('products')->insert([
            [
            "name"=>"oppo mobile",
            "price"=>"300",
            "description"=>"A smartphone with 4gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/navigation/a-series/a53s/A53s-navigation-blue-v2.png",
        ],
            [
                "name"=>"Panasonic Tv",
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://streamtelly.com/wp-content/uploads/2021/01/Change-DNS-Settings-On-Panasonic-Viera-Smart-TV.jpg",
            ],
            [
                "name"=>"Soni TV",
                "price"=>"500",
                "description"=>"A TV with much more feature",
                "category"=>"tv",
                "gallery"=>"https://image.darty.com/hifi_video/televiseurs-led/grand_ecran_led/sony_kd75x81jaep_s2103054947991A_123144862.jpg",
            ]
        ]);
    }
}
