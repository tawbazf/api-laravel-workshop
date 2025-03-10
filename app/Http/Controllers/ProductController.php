<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }
    
    // public function store(Request $request) {
    //     return Product::create($request->all());
    // }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->save();

        return response()->json(['message' => 'Produit créé avec succès'], 201);
    }
    public function show(Product $product) {
        return $product;
    }
    
    public function update(Request $request, Product $product) {
        $product->update($request->all());
        return $product;
    }
    
    public function destroy(Product $product) {
        $product->delete();
        return response()->noContent();
    }
    
    
}