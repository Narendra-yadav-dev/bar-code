<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController
{
    public function index(){
        $categories = Category::orderBy('id','desc')->paginate('10');
        return view('categories.index',compact('categories'));
    }
    public function create()
    {
        return view('categories.add', [
            'categories' => null,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = strtolower($request->name);
        $category->save();

        return redirect()->route('categories.index')
            ->with('success', 'Category created');
    }
    public function edit(Request $request, $id)
    {
        $category = Category::find($id);
        return view('categories.add', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|string'
        ]);
        $item = Category::find($id);
        $item->name = $request->name;
        $item->slug = strtolower($request->name);
        $item->update();

        return redirect()->route('categories.index')
            ->with('success', 'Category updated');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')
            ->with('success', 'Category Deleted');
    }
}
