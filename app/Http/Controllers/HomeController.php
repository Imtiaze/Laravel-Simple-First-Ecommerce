<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){

        $data = [];
        $data['products'] = Product::select(['slug', 'name', 'price', 'description'])->get();

        return view('frontend.home', $data);
    } 
    public function showProduct($slug){
        $data = [];
        $data['product'] = Product::select(['name', 'price', 'description', 'category_id'])
                        ->where('slug', $slug)
                        ->first();
                        
        return view('frontend.single', $data);
    }

    public function categoryListing($slug){
        $data = [];
        $data['category'] = Category::select(['name','id'])->where('slug', $slug)->first();

        $data['products'] = $data['category']->products;
        // $data['products'] = Product::select(['slug','name', 'price', 'description'])->where('category_id', $data['category']->id)->get();

        return view('frontend.category', $data);
    }
}
