<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class RentalController extends Controller
{

    public function list(){
        $categories = Category::all();
        $products = Product::all();


        return view('rentalpage',compact('categories','products'));

    }
}
