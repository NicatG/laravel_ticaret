<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index(){

        return view('Frontend/Basket');
    }
}
