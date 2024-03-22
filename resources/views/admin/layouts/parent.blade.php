<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ url('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav mx-3" style="">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>


            <!-- SEARCH FORM -->
            @yield('search')

            <!-- Right navbar links -->
            {{-- <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('profile.index') }}" class="dropdown-item text-primary ">
                            <i class="ion-person"></i> My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span
                            class="badge badge-warning navbar-badge">{{ Auth::user()->unreadNotifications->count() }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"
                        style="max-height: 300px; overflow-y: auto; overflow-x: hidden;"
                        aria-labelledby="notificationDropdown">
                        <span class="dropdown-item dropdown-header">{{ Auth::user()->unreadNotifications->count() }}
                            Notifications</span>
                        <div class="dropdown-divider"></div>

                        @foreach (Auth::user()->unreadNotifications as $notification)
                            <a href="{{ route('orders.show', $notification->data['order_id']) }}"
                                class="dropdown-item">
                                <i class="fa fa-solid fa-receipt"></i> New Order #{{ $notification->data['order_id'] }}
                                <div>
                                    <small>Order Status: {{ $notification->data['order_status'] }}, Payment Status:
                                        {{ $notification->data['payment_status'] }} </small>
                                </div>
                                <div>
                                    <small>TATAL: ${{ $notification->data['total_price'] }}</small>
                                </div>
                                <span
                                    class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                            </a>
                            <div class="dropdown-divider"></div>
                        @endforeach
                        <a href="{{ route('markAllAsRead') }}" class="dropdown-item dropdown-footer">Mark all as Read
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul> --}}
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a class="nav-link" href="{{ route('dashboard') }}">My Dashboard</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Pills
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('pill.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Pills</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pill.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Pill</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Pills Interaction
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('pillsInteraction.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Interactions</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pillsInteraction.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Interaction</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Blogs
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('blog.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Blogs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blog.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Blog</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogCategory.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blog Categories</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Settings
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('sideEffectsSelection.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Side Effects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contraindicationsSelection.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contraindications</p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Orders
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('orders.pending') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('orders.processing') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Processing Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('orders.shipped') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Shipped Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('orders.delivered') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Delivered Orders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('orders.cancelled') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cancelled Orders</p>
                                    </a>
                                </li>

                            </ul>
                        </li> --}}


                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Coupons
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('coupon.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Coupons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('coupon.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Coupon</p>
                                    </a>
                                </li>

                            </ul>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Users</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="contents">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('/plugins/chart.js') }}/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ url('/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    {{-- <script src="{{ url('/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
    <!-- jQuery Knob Chart -->
    {{-- <script src="{{ url('/plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}
    <!-- daterangepicker -->
    <script src="{{ url('/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('/dist/js/pages/dashboard.js') }}"></script>
    @yield('js')
</body>

</html>
