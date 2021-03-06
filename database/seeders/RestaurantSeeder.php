<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Restaurants')->insert([
            'name' => "McDonalds",
            'street' => "Centro Comercial Holea",
            'phone' => "959123123",
            'image_path' => "mcdonalds.jpg",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Restaurants')->insert([
            'name' => "Azabache",
            'street' => "Vazquez Lopez",
            'phone' => "959257528",
            'image_path' => "azabache.jpg",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Restaurants')->insert([
            'name' => "Charlotte",
            'street' => "Martin Alonso Pinzon",
            'phone' => "959072922",
            'image_path' => "charlotte.png",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Restaurants')->insert([
            'name' => "Er Chiclanero",
            'street' => "Pablo Rada",
            'phone' => "959899562",
            'image_path' => "erchiclanero.jpg",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Restaurants')->insert([
            'name' => "Burguer Hermanos Rodriguez",
            'street' => "Plaza de las Monjas",
            'phone' => "959969523",
            'image_path' => "rodriguez.jpg",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
