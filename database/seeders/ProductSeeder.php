<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use IlluminateApp\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('product')->truncate();
        DB::table('product')->insert([

            'product_name'=>'nicat',
            'slug'=>'nicat',
            'description'=>'cvgbhjnk',
            'price'=>123.2,
            'created_at'=>date("Y-m-d H:i:s")
            
        ]);
    }
}
