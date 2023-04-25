<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $name =['Smartfonlar','Tv-audio','Məişət Texnikası','Notbuklar','Smart Saatlar','Musiqi Alətləri'];

        foreach($name as $value){

            DB::table('category')->insert([
               'category_name'=>$value,
               'slug'=>strtolower($value)
            ]);

        }
        
    }
}
