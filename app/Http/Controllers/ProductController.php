<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $pagination = 10;

        if ($request->search) {
            $products = Product::select('id', 'category_id', 'name', 'price', 'image')->with('category:id,name')
                ->whereAny(['name', 'price'], 'LIKE', '%' . $request->search . '%')
                ->paginate($pagination)
                ->withQueryString();
        } else {
            $products = Product::select('id', 'category_id', 'name', 'price', 'image')->with('category:id,name')
                ->latest()
                ->paginate($pagination);
        }

        return view('products.index', compact('products'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create(): View
    {
        $categories = Category::get(['id', 'name']);

        return view('products.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category'    => 'required|exists:categories,id',
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required',
            'image'       => 'required|image|mimes: jpeg,jpg,png|max: 1024'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        Product::create([
            'category_id' => $request->category,
            'name'        => $request->name,
            'description' => $request->description,
            'price'       => str_replace('.', '', $request->price),
            'image'       => $image->hashName()
        ]);

        return redirect()->route('products.index')->with(['success' => 'The new product has been saved.']);
    }

    public function show(string $id): View
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function edit(string $id): View
    {
        $product = Product::findOrFail($id);
        $categories = Category::get(['id', 'name']);

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'category'    => 'required|exists:categories,id',
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required',
            'image'       => 'image|mimes: jpeg,jpg,png|max: 1024'
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            Storage::delete('public/products/' . $product->image);

            $product->update([
                'category_id' => $request->category,
                'name'        => $request->name,
                'description' => $request->description,
                'price'       => str_replace('.', '', $request->price),
                'image'       => $image->hashName()
            ]);
        } else {
            $product->update([
                'category_id' => $request->category,
                'name'        => $request->name,
                'description' => $request->description,
                'price'       => str_replace('.', '', $request->price)
            ]);
        }

        return redirect()->route('products.index')->with(['success' => 'The product has been updated.']);
    }

    public function destroy($id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        Storage::delete('public/products/' . $product->image);

        $product->delete();

        return redirect()->route('products.index')->with(['success' => 'The product has been deleted!']);
    }
}
