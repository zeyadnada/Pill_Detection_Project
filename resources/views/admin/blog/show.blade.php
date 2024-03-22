@extends('admin.layouts.parent')


@section('title', 'Show Blog')

@section('css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
@endsection



@section('content')

    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="col-12">
                <img src="{{ url('images/blog/' . $blog->thumbnail) }}" class="product-image" alt="Product Image">
            </div>

            <hr>
            <br>
        </div>
        <div class="col-12 col-sm-6">
            <h1>#{{ $blog->id }}</h1>
            <hr>

            <div class="bg-gray py-2 px-3 mt-4">
                <h3 class="mb-0">
                    Title
                </h3>
                <h4 class="mt-0">
                    <small>{{ $blog->title }}</small>
                </h4>
            </div>
            <div class="bg-gray py-2 px-3 mt-4">
                <h3 class="mb-0">
                    Created_at
                </h3>
                <h4 class="mt-0">
                    <small>{{ $blog->created_at }}</small>
                </h4>
            </div>
            <div class="bg-gray py-2 px-3 mt-4">
                <h3 class="mb-0">
                    Updated_at
                </h3>
                <h4 class="mt-0">
                    <small>{{ $blog->updated_at }}</small>
                </h4>
            </div>

        </div>
        <div class="bg-gray col-12">
            <h2> Content</h2>
            <h6>{{ $blog->content }}</h6>
        </div>
    </div>

@endsection


@section('js')
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
@endsection
