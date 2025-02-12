<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $products = Product::where('user_id', $userId)->get();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'detail' => 'required|string',
        ]);

        // Assign the authenticated user's ID to the product
        $data['user_id'] = Auth::id();

        $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function detail(Product $product)
    {
        return view('products.detail', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'detail' => 'required|string',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product deleted successfully');
    }
}