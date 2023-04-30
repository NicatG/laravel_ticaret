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
        
        DB::table('category')->truncate();

        $name =['Smartfonlar','Tv-audio','Məişət Texnikası','Notbuklar','Smart Saatlar','Musiqi Alətləri'];
        $subcategory=['Samsung','Xiaomi','Iphone','Huawei'];
        
       
        foreach($name as $value){

            DB::table('category')->insert([
               'category_name'=>$value,
               'slug'=>strtolower($value),
               'created_at'=>now()
            ]);

            
        
    }
    foreach($subcategory as $value){

        DB::table('category')->insert([
           'category_name'=>$value,
           'slug'=>strtolower($value),
           'parent_id'=>1,
           'created_at'=>now()
        ]);

}
}
}