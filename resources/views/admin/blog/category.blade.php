@extends('admin.layouts.parent')

@section('title', 'Blog Category')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection


{{-- @section('search')
    <form action="{{ route('search') }}" method="GET">
        <div class="input-group">
            <input type="hidden" name="search_section" value="category">
            <select name="search_by" class="form-select form-select-sm" style="max-width: 140px" aria-label="Dropdown">
                <option value="category_name">category Name</option>
                <option value="category_price">category Price</option>
                <option value="category_quantity">category Quantity</option>
                <option value="category_id">category Category</option>
            </select>
            <input type="text" class="form-control" placeholder="Search" name="search_for">
            <button name="submit" type="submit" class="btn btn-warning">Search</button>
        </div>
    </form>
@endsection --}}
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex justify-content-end px-5">
        <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModal">Add
            Blog Category</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('blogCategory.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Category Name:</label>
                            <input type="text" name="name" class="form-control" id="recipient-name">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="row px-5">
        <div class="col-12">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            {{-- <td>{{ $category->category->name ?? 'Category deleted' }}</td> --}}
                            <td>
                                 <!-- Button to trigger delete confirmation modal -->
                                 <button class="btn btn-danger" data-toggle="modal"
                                 data-target="#deleteModal{{ $category->id }}">Delete</button>

                             <!-- Delete Confirmation Modal -->
                             <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="deleteModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                             <button type="button" class="close" data-dismiss="modal"
                                                 aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             Are you sure you want to delete this item?
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary"
                                                 data-dismiss="modal">Cancel</button>
                                             <form action="{{ route('blogCategory.destroy', $category->id) }}" method="post">
                                                 @method('DELETE')
                                                 @csrf
                                                 <button type="submit" class="btn btn-danger">Delete</button>
                                             </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                            </td>
                        </tr>
                    @empty
                        <h3>Nothing to Show...</h3>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{ $categories->withQueryString()->links() }}
@endsection

@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
