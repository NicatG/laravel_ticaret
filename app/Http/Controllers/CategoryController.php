<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($parent_id){

        $category=Category::where('id',$parent_id)->get();
        $subCategory=Category::where('parent_id',$parent_id)->get();
        
        
        return view('Frontend/Category',compact('subCategory','category'));
    }

    
}
