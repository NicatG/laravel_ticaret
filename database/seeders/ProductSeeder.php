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
        
      DB::table('product')->truncate();
      $faker=Faker::create();

      for($i=0;$i<=30;$i++){
        $name=$faker->sentence(1);
        DB::table('product')->insert([
            
            'slug'=>strtolower($name),
            'product_name'=>$name,
            'description'=>$faker->sentence(20),
            'price'=>$faker->randomFloat(3,1,20),
            'created_at'=>date("Y-m-d")
        ]);


      }
        
  



    }
}
