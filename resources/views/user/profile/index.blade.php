@extends('user.layouts.parent')

@section('title', 'Profile')

@section('content')

    <div class="container" style="padding-top: 30px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-info">
                    <h2>User Profile</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" alt="Profile Picture"
                                class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-md-8">
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Email:</strong> johndoe@example.com</p>
                            <p><strong>History:</strong> Premium</p>
                            <p><strong>Subscription Expiry:</strong> January 31, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary"
                style="
            width: 20%;
            font-weight: bold;
            background-color: white;
            color: rgba(119, 171, 156, 1);

            border-radius: 20px;
            box-shadow: #d8d6d66b 0px 20px 10px -15px;
            border: 1px solid #77ab9c;
            transition: all 0.2s ease-in-out;
            font-weight: 500;
            font-size: 18px;
            margin-left: 32rem;
            cursor: pointer;
          ">
                Logout
            </button>
        </div>
    </div>
@endsection
