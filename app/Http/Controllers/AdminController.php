<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\Club;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products() {
        $this->authorize('admin');
        $products = Products::all();
        return view('container.adminproduct', [
            "title" => "Product (admin)",
            "products" => $products->load('category', 'club')
        ]);
    }

    public function addproduct() {
        $this->authorize('admin');
        return view('container.addproduct', [
            "title" => "Add Product",
            "category" => Category::all(),
            "club" => Club::all()
        ]);
    }

    public function create(Request $request) {
        $this->authorize('admin');
        $validated = $request->validate([
            "name" => "required|max:50",
            "price" => "required",
            "description" => "required|max:255",
            "image" => "required|image|file|max:1024",
        ]);

        if($request->file('image')) {
            $validated['image'] = ltrim($request->file('image')->store('img', ['disk' => 'public']), "img/");
        }
        $validated['category_id'] = Category::where('category', $request['category_id'])->get()->first()->id;
        $validated['club_id'] = Club::where('club', $request['club_id'])->get()->first()->id;
        $validated['price'] = intval($validated['price']);
        Products::create($validated);
        return back()->with('success', 'Product created');
    }
}
