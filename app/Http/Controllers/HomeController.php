<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    } 
    public function showProduct($slug){
        $data = [];
        $data['slug'] = $slug;
        return view('frontend.single', $data);
    }

    public function categoryListing($slug){
        $data = [];
        return view('frontend.category', $data);
    }
}