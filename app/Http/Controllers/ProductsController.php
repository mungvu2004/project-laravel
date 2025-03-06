<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index() {
        $products = Products::all();
        // dd($products->all());
        return view('products.index', compact('products'));
    }
    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|between:0,9999.99',
            'stock' => 'required|integer|min:0',
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
