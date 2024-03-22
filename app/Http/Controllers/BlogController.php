<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\traits\media;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller

{
    use media;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Blog::paginate(10);
        return view('admin.blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::get();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $data = $request->except('thumbnail');
        if ($request->has('thumbnail')) {
            $imageName = $this->uploadImage($request->thumbnail, '/blog');
            $data['thumbnail'] = $imageName;
        }
        Blog::create($data);
        return redirect()->route('blog.index')->with('success', 'You add new article successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = BlogCategory::get();
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::find($id);
        $data = $request->except('thumbnail');
        if ($request->has('thumbnail')) {
            //delete old photo
            $oldImageName = $blog->thumbnail;
            if ($oldImageName) {
                $photoPath = public_path('/images/blog/') . $oldImageName;
                $this->deletePhoto($photoPath);
            }
            //upload new
            $newImageName = $this->uploadImage($request->thumbnail, '/blog');
            $data['thumbnail'] = $newImageName;
        }
        $blog->update($data);
        return redirect()->route('blog.index')->with('success', 'You Update article successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $imageName = $blog->thumbnail;
        if ($imageName) {
            $photoPath = public_path('/images/blog/') . $imageName;
            $this->deletePhoto($photoPath);
        }
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'You Delete new article successfully!');
    }
}