<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'qty' => 'required|numeric|min:0',
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'qty' => $request->qty,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product) {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'qty' => 'required|numeric|min:0',
        ]); 

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }


}
