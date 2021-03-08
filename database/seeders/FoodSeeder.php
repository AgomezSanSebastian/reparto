<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Foods')->insert([
            'name' => "Hamburguesa Herm. Rodri.",
            'description' => "Hamburguesa de cerdo con tomate",
            'restaurant_id' => "5",
            'price' => "1.00",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Cochinito",
            'description' => "Cochinito con tomate",
            'restaurant_id' => "5",
            'price' => "1.50",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Ensalada de Berenjena, Pimiento y Jamón",
            'description' => "Rica comida fresca",
            'restaurant_id' => "2",
            'price' => "12.00",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Gambas de Huelva",
            'description' => "Gambas frescas de las costas de Huelva",
            'restaurant_id' => "4",
            'price' => "9.00",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Ensaladilla de pulpo",
            'description' => "Comida para que te entre el gusanillo",
            'restaurant_id' => "3",
            'price' => "4.00",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Risotto de rabo de toro",
            'description' => "Saborea lo tradicional",
            'restaurant_id' => "3",
            'price' => "4.00",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Wok ibérico con verduras",
            'description' => "Saborea lo iberico",
            'restaurant_id' => "3",
            'price' => "9.00",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "My combo",
            'description' => "Hamburguesa, patatas y refresco",
            'restaurant_id' => "1",
            'price' => "3.90",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('Foods')->insert([
            'name' => "Big Mac",
            'description' => "Hamburguesa doble con queso y pepinillo",
            'restaurant_id' => "1",
            'price' => "5.20",
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        ]);




    }
}
