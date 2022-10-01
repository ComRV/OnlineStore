<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function productsedit($product) {
        $this->authorize('admin');
        return view('container.addproduct', [
            "title" => "Update : ". $product,
            "category" => Category::all(),
            "club" => Club::all(),
            "product" => Products::where('name',$product)->first()
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

    public function update(Request $request) {
        $this->authorize('admin');
        $validated = $request->validate([
            "name" => "required|max:50",
            "price" => "required",
            "description" => "required|max:255",
            "image" => "image|file|max:1024|unique:products"
        ]);
        if ($request->file('image')) {
            File::delete(public_path("img/$request->oldimage"));
            $validated['image'] = ltrim($request->file('image')->store('img', ['disk' => 'public']), "img/");
        }
        $validated['category_id'] = Category::where('category', $request['category_id'])->get()->first()->id;
        $validated['club_id'] = Club::where('club', $request['club_id'])->get()->first()->id;
        $validated['price'] = intval($validated['price']);
        Products::where('id', $request->id)->update($validated);
        return back()->with('success', 'Update product successful');
    }

    public function delete($name) {
        $this->authorize('admin');
        Products::destroy($name);
        return redirect('/admin/products')->with('success', 'Delete product successful');
    }
}
