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
}
