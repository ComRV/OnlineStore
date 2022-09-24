<?php

namespace App\Http\Controllers;

use App\Models\Products;
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
}
