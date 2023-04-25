<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomePageController extends Controller
{
    function index(){


        $category=Category::where('parent_id',NULL)->get();
        return view('Frontend/Homepage',compact('category'));
    }
}
