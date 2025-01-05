<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('categories')->paginate(6); // Load products with related categories
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all(); // Load all categories for selection
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validate image file
            'categories' => 'required|array', // Ensure categories are selected
            'categories.*' => 'exists:categories,id', // Validate category IDs
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('products', 'public');

        // Create product
        $product = Product::create([
            'product_name' => $validated['product_name'],
            'price' => $validated['price'],
            'image' => $imagePath,
        ]);

        // Attach categories to product
        $product->categories()->attach($validated['categories']);

        return redirect()->route('products.index')->with('message', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        $categories = Category::all(); // Load all categories for selection
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Image is optional
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ]);

        // Handle optional image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image && Storage::exists('public/' . $product->image)) {
                Storage::delete('public/' . $product->image);
            }

            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        // Update product details
        $product->update([
            'product_name' => $validated['product_name'],
            'price' => $validated['price'],
        ]);

        // Sync categories
        $product->categories()->sync($validated['categories']);

        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        // Detach categories
        $product->categories()->detach();

        // Delete the product image if it exists
        if ($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }

        // Delete the product
        $product->delete();

        return redirect()->route('products.index')->with('message', 'Product deleted successfully!');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        $product->load('categories'); // Load related categories
        return view('products.show', compact('product'));
    }
}
