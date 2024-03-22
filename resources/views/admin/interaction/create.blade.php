@extends('admin.layouts.parent')

@section('title', 'Create Interaction')


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
                <form action="{{ route('pillsInteraction.store') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pill_1_id">Pill #1</label>
                            <select class="form-control select2 select2-hidden-accessible" name="pill_1_id"
                                style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach ($pills as $pill)
                                    <option value="{{ $pill->id }}">{{ $pill->name }}</option>
                                @endforeach
                            </select>
                            @error('pill_1_id')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="pill_2_id">Pill #2</label>
                            <select class="form-control select2 select2-hidden-accessible" name="pill_2_id"
                                style="width: 100%;" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                @foreach ($pills as $pill)
                                    <option value="{{ $pill->id }}">{{ $pill->name }}</option>
                                @endforeach
                            </select>
                            @error('pill_2_id')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <label for="interaction_type">Interaction Type</label>
                            <select class="form-control select2 select2-hidden-accessible" name="interaction_type"
                                style="width: 100%;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="severe">Severe</option>
                                <option value="moderate">Moderate</option>
                                <option value="conditional">Potential/Conditional</option>
                                <option value="unknown">Unknown</option>
                            </select>
                            @error('interaction_type')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                    <br>
                    <div class="form-row">
                        <div class="col-12">
                            <label for="interaction_description">Description</label>
                            <textarea class="form-control @error('interaction_description') is-invalid @enderror form-control custom-file"
                                id="interaction_description" name="interaction_description" placeholder="Enter Pill Interaction Description"
                                rows="5">{{ old('interaction_description') }}</textarea>
                            @error('interaction_description')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-12">
                            <label for="guides">Guides</label>
                            <textarea class="form-control @error('guides') is-invalid @enderror form-control custom-file" id="guides"
                                name="guides" placeholder="Enter Pill Guides" rows="4">{{ old('guides') }}</textarea>
                            @error('guides')
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

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
@endsection
