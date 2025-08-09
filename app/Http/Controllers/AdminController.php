<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data['categories'] = Category::get();
        return view('admin.category', $data);
    }
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->category_name = $request->category;
        $categories->save();
        return redirect()->route('view_category')->with('success', 'Category are created successfully !');
    }

    public function edit($id) {
        $data['category'] = Category::findorfail($id);
        return view('admin.edit', $data);

    }
    public function update(Request $request, $id)
{
    $request->validate([
        'category_name' => 'required|string|max:255'
    ]);

    $category = Category::findOrFail($id);

    $category->update([
        'category_name' => $request->category_name
    ]);

    return redirect()->route('view_category')->with('success', 'Category updated successfully.');
}

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
