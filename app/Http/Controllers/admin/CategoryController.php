<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('news')->get();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect('admin/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request,Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);
        return redirect("/admin/categories/$category->id/edit");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('admin/categories');
    }
}
