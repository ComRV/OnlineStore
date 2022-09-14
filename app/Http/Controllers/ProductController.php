<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home() {
        return view('container.home', [
            "title" => "Home",
            "products" => Products::all()
        ]);
    }
    public function detail($name) {
        return view('container.detail', [
            "title" => "Detail",
            "detail" => Products::where('name', $name)->get()[0],
            "recommended" => Products::inRandomOrder()->limit(6)->get()
        ]);
    }
}
