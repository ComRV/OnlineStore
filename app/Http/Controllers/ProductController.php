<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Club;
use App\Models\Products;

class ProductController extends Controller
{
    public function home() {
        $products = Products::all();
        if (request('search')) {
            $products->where('name', 'like', '%'.request('search'). '%');
        }
        
        return view('container.home', [
            "title" => "Home",
            "products" => $products->load('category','club'),
            "category" => Category::all(),
            "club" => Club::all()
        ]);
    }
    public function detail($name) {
        return view('container.detail', [
            "title" => "Detail",
            "detail" => Products::where('name', $name)->get()[0],
            "recommended" => Products::inRandomOrder()->limit(6)->get()
        ]);
    }

    public function category($category) {
        return view('container.home', [
            "title" => $category,
            "products" => Category::where('category', $category)->first()->products,
            "category" => Category::all(),
            "club" => Club::all()
        ]);
    }

    public function club($club) {
        return view('container.home', [
            "title" => $club,
            "products" => Club::where('club', $club)->first()->products,
            "category" => Category::all(),
            "club" => Club::all()
        ]);
    }
}
