<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::all();

        return view('admin.Category.category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_name' => ['required', 'unique:categories'],
            'category_description' => ['required'],
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        ]);

        return redirect()->route('admin.category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.Category.add_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category_id): View
    {
        $category = Category::findorFail($category_id);

        return view('admin.Category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category_id): RedirectResponse
    {
        $category = Category::findorFail($category_id);

        $request->validate([
            'category_name' => ['required', 'unique:categories,category_name,' . $category_id . ',category_id'],
            'category_description' => ['required'],
        ]);

        $category->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description
        ]);

        return redirect()->route('admin.category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category_id): RedirectResponse
    {
        Category::destroy($category_id);

        return redirect()->route('admin.category');
    }
}
