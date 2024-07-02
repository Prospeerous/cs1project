<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Merchant;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Handle search query
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        // Handle category filter
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }

        // Handle location filter
        if ($request->has('location') && $request->location != '') {
            $query->where('location', $request->location);
        }

        // Handle merchant filter
        if ($request->has('merchant') && $request->merchant != '') {
            $query->where('merchant_id', $request->merchant);
        }

        // Handle sorting
        if ($request->has('sort')) {
            if ($request->sort == 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('price', 'desc');
            } elseif ($request->sort == 'name_asc') {
                $query->orderBy('name', 'asc');
            } elseif ($request->sort == 'name_desc') {
                $query->orderBy('name', 'desc');
            }
        }

        // Pagination
        $products = $query->paginate(10);

        // Get distinct locations and merchants for the filters
        $locations = Product::select('location')->distinct()->get();
        $merchants = Merchant::all();

        return view('products.index', compact('products', 'locations', 'merchants'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Add methods for creating, storing, editing, and updating products.
    public function create()
    {
        return view('products.addProduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string|max:1000',
            'product_quantity' => 'required|integer',
            'product_price' => 'required|numeric',
            'product_category' => 'required|string|max:255',
            'product_image' => 'nullable|image|max:2048',
        ]);

        $product = new Product();
        $product->farmer_id = auth()->id();
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->product_category = $request->product_category;

        if ($request->hasFile('product_image')) {
            $product->product_image = $request->file('product_image')->store('products', 'public');
        }

        $product->save();

        return redirect()->route('products.add')->with('success', 'Product added successfully!');
    }
}
