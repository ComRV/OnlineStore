<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            "name" => "Barcelona Jersey Third Kit 2022-23",
            "description" => "This Jersey pairs design details with sweat-wicking fabric to give you a game-ready look inspired by your favorite team. Nike Dri-FIT technology moves sweat away from your skin for quicker evaporation, helping you stay dry and comfortable. Design is modeled after what the pros wear on the field.",
            "image" => "barcelonathirdkit",
            "price" => 150000,
            "category_id" => 1,
            "club_id" => 2

        ]);
        Products::create([
            "name" => "Barcelona Jersey Home 2022-23",
            "description" => "This Jersey pairs design details with sweat-wicking fabric to give you a game-ready look inspired by your favorite team. Nike Dri-FIT technology moves sweat away from your skin for quicker evaporation, helping you stay dry and comfortable. Design is modeled after what the pros wear on the field.",
            "image" => "barcelonahome",
            "price" => 150000,
            "category_id" => 1,
            "club_id" => 2

        ]);
        Products::create([
            "name" => "Barcelona Jersey away 2022-23",
            "description" => "This Jersey pairs design details with sweat-wicking fabric to give you a game-ready look inspired by your favorite team. Nike Dri-FIT technology moves sweat away from your skin for quicker evaporation, helping you stay dry and comfortable. Design is modeled after what the pros wear on the field.",
            "image" => "barcelonaaway",
            "price" => 150000,
            "category_id" => 1,
            "club_id" => 2

        ]);
        Products::create([
            "name" => "Real Madrid Jersey home 2022-23",
            "description" => "This Jersey pairs design details with sweat-wicking fabric to give you a game-ready look inspired by your favorite team. Nike Dri-FIT technology moves sweat away from your skin for quicker evaporation, helping you stay dry and comfortable. Design is modeled after what the pros wear on the field.",
            "image" => "realmadridhome",
            "price" => 150000,
            "category_id" => 1,
            "club_id" => 2

        ]);
        Products::create([
            "name" => "Inter Milan Jersey home 2022-23",
            "description" => "This Jersey pairs design details with sweat-wicking fabric to give you a game-ready look inspired by your favorite team. Nike Dri-FIT technology moves sweat away from your skin for quicker evaporation, helping you stay dry and comfortable. Design is modeled after what the pros wear on the field.",
            "image" => "intermilanhome",
            "price" => 150000,
            "category_id" => 1,
            "club_id" => 3

        ]);
    
    }
}
