<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Request $request): View
    {
        $pagination = 10;

        if ($request->search) {
            $categories = Category::select('id', 'name')
                ->where('name', 'LIKE', '%' . $request->search . '%')
                ->paginate($pagination)
                ->withQueryString();
        } else {
            $categories = Category::select('id', 'name')
                ->latest()
                ->paginate($pagination);
        }

        return view('categories.index', compact('categories'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create(): View
    {
        return view('categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index')->with(['success' => 'The new category has been saved.']);
    }

    public function edit(string $id): View
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('categories.index')->with(['success' => 'The category has been updated.']);
    }

    public function destroy($id): RedirectResponse
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index')->with(['success' => 'The category has been deleted!']);
    }
}
