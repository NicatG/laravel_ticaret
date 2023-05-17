<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($parent_id){

        $category=Category::where('id',$parent_id)->get();
        $subCategory=Category::where('parent_id',$parent_id)->get();
        $category1=Category::find($parent_id);
        $product1=$category1->products;
        
        return view('Frontend/Category',compact('subCategory','category','product1'));
    }

    
}
