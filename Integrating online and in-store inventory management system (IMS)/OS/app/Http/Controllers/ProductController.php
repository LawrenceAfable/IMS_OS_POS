<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // Fetch products from IMS API
        $response = Http::get('http://127.0.0.1:8000/api/products');

        // Check if the request was successful
        if ($response->successful()) {
            $products = $response->json();
            return view('products.index', compact('products'));
        } else {
            // Handle errors if the API fails
            return abort(500, 'Failed to fetch products from IMS.');
        }
    }
}
