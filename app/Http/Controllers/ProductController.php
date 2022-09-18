<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Club;
use App\Models\Products;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class ProductController extends Controller
{
    public function home() {
        
        return view('container.home', [
            "title" => "Home",
            "products" => Products::with('category')->get(),
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
        $product = Category::where('category', $category)->first();
        return view('container.home', [
            "title" => $category,
            "products" => $product->products,
            "category" => Category::all(),
            "club" => Club::all()
        ]);
    }

    public function club($club) {
        $product = Club::where('club', $club)->first();
        return view('container.home', [
            "title" => $club,
            "products" => $product->products,
            "category" => Category::all(),
            "club" => Club::all()
        ]);
    }
}
