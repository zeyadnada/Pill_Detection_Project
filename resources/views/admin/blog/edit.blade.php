@extends('admin.layouts.parent')

@section('title', 'Create Blog')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row px-4">
                    <div class="col-7">
                        <label for="title">Blog Title</label>
                        <input type="text" name="title" id="title"
                            class="@error('title') is-invalid @enderror  form-control" placeholder="Enter Blog Title"
                            aria-describedby="helpId" value="{{ $blog->title }}">
                        @error('title')
                            <div class="error alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-3">
                        <label for="thumbnail">Image</label>
                        <input type="file" name="thumbnail" value="{{ $blog->thumbnail }}"
                            class="@error('picture') is-invalid @enderror form-control custom-file">
                        @error('picture')
                            <div class="error alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label for="category_id">Categories</label>
                        <select name="category_id" id="category_id"
                            class="@error('category_id') is-invalid @enderror form-control">
                            @foreach ($categories as $category)
                                <option {{ $blog->category_id == $category->id ? 'selected' : '' }}
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="error alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                
                <br>
                <div class="form-row px-4">
                    <div class="col-12">
                        <label for="content">Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror form-control custom-file" id="content"
                            name="content" rows="12">{{ $blog->content }}</textarea>
                        @error('content')
                            <div class="error alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row my-4 px-4">
                    <div class="col-2">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
