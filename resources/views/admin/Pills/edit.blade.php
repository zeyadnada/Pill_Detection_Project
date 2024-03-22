@extends('admin.layouts.parent')

@section('title', 'edit Pill')


@section('css')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('pill.update', $pill->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="@error('name') is-invalid @enderror form-control" placeholder="Enter Pill Name"
                                aria-describedby="helpId" value="{{ $pill->name }}">
                            @error('name')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label for="photo">photo</label>
                            <input type="file" name="photo" value="{{ $pill->photo }}"
                                class="@error('photo') is-invalid @enderror form-control custom-file">
                            @error('photo')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>


                    <div class="form-row">
                        <div class="col-6">
                            <label>Side Effects</label>
                            <select class="select2" name="side_effect[]" multiple="multiple"
                                data-placeholder="Select Side Effects" style="width: 100%;">
                                @foreach ($sideEffects as $sideEffec)
                                    <option {{ $pill->id == $pill->sideEffects->pill_id ? 'selected' : '' }}
                                        value="{{ $sideEffec->name }}">{{ $sideEffec->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-6">
                            <label>Contraindications</label>
                            <select class="select2" name="contraindication[]" multiple="multiple" style="width: 100%;">
                                @foreach ($contraindications as $contraindication)
                                    <option {{ $contraindication->pill_id == $pill->id ? 'selected' : '' }}
                                        value="{{ $contraindication->name }}">{{ $contraindication->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="form-row">
                        <div class="col-12">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror form-control custom-file" id="description"
                                name="description" placeholder="Enter Pill Description" rows="6">{{ $pill->description }}</textarea>
                            @error('description')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->

    {{-- ////////////// --}}
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
    <script>
        $("input").tagsinput('items')
    </script>



@endsection
