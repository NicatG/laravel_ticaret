<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
      DB::table('product')->truncate();
      $name=$faker->name();
        DB::table('product')->insert([
            
            'slug'=>strtolower($name),
            'product_name'=>$name,
            'description'=>$faker->sentence(5),
            'price'=>$faker->randomFloat(3,1,20),
            'created_at'=>date("Y-m-d")
        ]);
  



    }
}
