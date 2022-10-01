<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Club;
use App\Models\Comment;
use App\Models\Products;
use Illuminate\Http\Request;

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
        $product = Products::where('name', $name)->first(); 
        return view('container.detail', [
            "title" => "Detail",
            "detail" => $product,
            "recommended" => Products::inRandomOrder()->limit(6)->get(),
            "comments" => $product->comment->load('user')
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

    public function comment(Request $request, $product) {
        $validate = $request->validate([
            "comment" => "required|max:255"
        ]);
        $validate['user_id'] = auth()->user()->id;
        $validate['products_id'] = Products::where('name', $product)->get()->first()->id;
        Comment::create($validate);
        return back();
    }
}
