<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectionRequest;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = BlogCategory::paginate(15);
        return view('admin.blog.category',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SelectionRequest $request)
    {
        $category= $request->all();
        BlogCategory::create($category);
        return back()->with('success', 'You added a new Category successfully!');
    }
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category =BlogCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('blogCategory.index')->with('success', 'You Delete Category successfully!');
    }
}