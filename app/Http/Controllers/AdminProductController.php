<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required|max:255',
            'slug' => 'required|unique:products|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required',
            'image' => 'image|file|max:2048',
            'color' => 'required|max:255',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'description' => 'required',
            'image' => 'image|file|max:2048',
            'color' => 'required|max:255',
        ];

        if ($request->slug !== $product->slug) {
            $rules['slug'] = 'required|unique:products|max:255';
        }

        $validated = $request->validate($rules);

        if ($request->file('image')) {
            if ($product->oldImage) {
                Storage::delete($product->oldImage);
            }
            $validated['image'] = $request->file('image')->store('products');
        }

        Product::where('id', $product->id)->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }

        Product::destroy($product->id);

        return redirect()->route('admin.products.index')->with('success', 'Product has been deleted!');
    }
}
