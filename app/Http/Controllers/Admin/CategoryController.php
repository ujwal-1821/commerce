<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
 public function view_category()
    {
        $data['categories'] = Category::get();
        return view('admin.category.index', $data);
    }
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->category_name = $request->category;
        
        $categories->save();

        return redirect()->route('view_category');
    }

    public function edit($id) {
        $data['category'] = Category::findorfail($id);
        return view('admin.category.edit', $data);

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

    return redirect()->route('view_category');
}

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back();
    }
}
