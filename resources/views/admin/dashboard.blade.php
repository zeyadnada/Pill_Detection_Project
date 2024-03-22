@extends('admin.layouts.parent')

@section('title', 'Dashboard')

@section('content')


    <p>Hi zuko here</p>
    {{-- <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $productCount }}</h3>

                    <p>All Products</p>
                </div>
                <div class="icon">
                    <i class="ion-tshirt-outline"></i>
                </div>
                <a href="{{ route('products.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $categoryCount }}</h3>

                    <p>All categories</p>
                </div>
                <div class="icon">
                    <i class="ion-filing"></i>
                </div>
                <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $brandCount }}</h3>

                    <p>All Brands</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ionic"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $couponCount }}</h3>

                    <p>All Coupons</p>
                </div>
                <div class="icon">
                    <i class="ion-star"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $adminCount }}</h3>

                    <p>Admins</p>
                </div>
                <div class="icon">
                    <i class="ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $userCount }}</h3>

                    <p>Customers</p>
                </div>
                <div class="icon">
                    <i class="ion-person-stalker"></i>
                </div>
                <a href="{{ route('user.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $pendingCount }}</h3>

                    <p>Pending Orders</p>
                </div>
                <div class="icon">
                    <i class="ion-ios-stopwatch-outline"></i>
                </div>
                <a href="{{ route('orders.pending') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $processingCount }}</h3>

                    <p>Processing Orders</p>
                </div>
                <div class="icon">
                    <i class="ion-load-a"></i>
                </div>
                <a href="{{ route('orders.processing') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $shippedCount }}</h3>

                    <p>Shipped Orders</p>
                </div>
                <div class="icon">
                    <i class="ion-model-s"></i>
                </div>
                <a href="{{ route('orders.shipped') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $deliveredCount }}</h3>

                    <p>Delivered Orders</p>
                </div>
                <div class="icon">
                    <i class="ion-checkmark"></i>
                </div>
                <a href="{{ route('orders.delivered') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $cancelledCount }}</h3>

                    <p>Canclled Orders</p>
                </div>
                <div class="icon">
                    <i class="ion-close"></i>
                </div>
                <a href="{{ route('orders.cancelled') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div> --}}
@endsection
