<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::with('category')->get(); // Eager load the category relationship
        return view('dash.products.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dash.products.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $rules["{$localeCode}.title"] = 'required|string|max:255';
            $rules["{$localeCode}.content"] = 'required|string';
        }

        $request->validate($rules);

        $product = new Product([
            'category_id' => $request->category_id,
        ]);

        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $product->translateOrNew($localeCode)->title = $request->input("{$localeCode}.title");
            $product->translateOrNew($localeCode)->content = $request->input("{$localeCode}.content");
        }

        $product->save();

        if ($request->hasFile('image')) {
            $upload = $product->addMediaFromRequest('image')->toMediaCollection('images');
            $product->update(['image' => $upload->getUrl()]);
        }

        return redirect()->route('dashboard.products.index')->with('success', 'Post created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
