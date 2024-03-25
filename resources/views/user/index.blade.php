@extends('user.layouts.parent')

@section('title', 'DPill')

@section('content')

    <br>
    <br>
    <br>
    <h1 style="margin-left: 32rem">Explore our services {{ session('name') }}</h1>
    <p style="margin-left: 31rem; color: rgba(92, 91, 91, 1)">
        The system provide services in the following area
    </p>
    <div class="card-deck" style="margin-top: 3rem; margin-left: 12.5rem">
        <div class="row equal-height mt-2 col-md-12">
            <div class="roweq col-md-4">
                <div class="card"
                    style="
          max-width: 200px;
          background: rgba(0, 0, 0, 0);
          border-radius: 40px;
          padding: 10px 5px;
          box-shadow: rgb(170, 170, 170) 0px 30px 30px -20px;
          border: none;
        ">
                    <img src="/img/log2.png" alt="Bootstrap" width="170" />
                    <div class="card-body">
                        <p class="card-text" style="margin-top: auto">
                            <strong>Pill Detection</strong>
                        </p>
                        <a href="{{ route('detection.index') }}" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              margin-left: 40px;
            ">
                            Start
                        </a>
                    </div>
                </div>
            </div>
            <div class="roweq col-md-4">
                <div class="card"
                    style="
          max-width: 200px;
          background: rgba(0, 0, 0, 0);
          border-radius: 40px;
          padding: 10px 10px;
          box-shadow: rgb(170, 170, 170) 0px 30px 30px -20px;
          border: none;
        ">
                    <img src="/img/log1.png" alt="Bootstrap" width="170" />
                    <div class="card-body">
                        <p class="card-text" style="margin-top: auto">
                            <strong>Pill Interaction</strong>
                        </p>
                        <a href="{{ route('interaction.index') }}" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              margin-left: 40px;
            ">
                            Start
                        </a>
                    </div>
                </div>
            </div>

            <div class="roweq col-md-4">
                <div class="card"
                    style="
          max-width: 200px;
          background: rgba(0, 0, 0, 0);
          border-radius: 40px;
          padding: 10px 10px;
          box-shadow: rgb(170, 170, 170) 0px 30px 30px -20px;
          border: none;
        ">
                    <img src="/img/log3.png" alt="Bootstrap" width="190" />
                    <div class="card-body">
                        <p class="card-text" style="margin-top: auto">
                            <strong>View Blogs</strong>
                        </p>
                        <a href="{{ route('blog.index') }}" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              margin-left: 40px;
            ">
                            Start
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5 ml-4">
        <h1
            style="
      text-align: center;
      color: rgba(0, 0, 0, 0.61);
      text-shadow: 12px 12px 14px rgba(3, 1, 15, 0.116);
    ">
            Commonly Searched Pill
        </h1>
        <div class="row equal-height mt-2">
            <div class=" col-md-3">
                <div class="roweq card h-100">
                    <div class="card-img-container">
                        <img src="/img/pill6.png" class="card-img-top" alt="Pill 6" width="100%" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="roweq card h-100">
                    <div class="card-img-container h-100">
                        <img src="/img/pill7.png" class="card-img-top" alt="Pill 7" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="roweq card h-100">
                    <div class="card-img-container h-100">
                        <img src="/img/pill8.png" class="card-img-top" alt="Pill 8" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
            <div class="  col-md-3">
                <div class="roweq card h-100">
                    <div class="card-img-container h-100">
                        <img src="/img/pill9.png" class="card-img-top" alt="Pill 9" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row equal-height mt-2">
            <div class=" col-md-3">
                <div class=" roweq card h-100">
                    <div class="card-img-container">
                        <img src="/img/pill3.png" class="card-img-top" alt="Pill 3" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" roweq card h-100">
                    <div class="card-img-container">
                        <img src="/img/pill10.png" class="card-img-top" alt="Pill 10" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class=" roweq card h-100">
                    <div class="card-img-container">
                        <img src="/img/pill11.png" class="card-img-top" alt="Pill 11" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="roweq card h-100">
                    <div class="card-img-container">
                        <img src="/img/pill12.png" class="card-img-top" alt="Pill 12" />
                    </div>
                    <div class="card-body d-grid">
                        <h5 class="card-title">C vitamin_teva</h5>
                        <p class="card-text">500 mg</p>
                        <a href="blog.html" class="btn btn-view"
                            style="
              background-color: #77ab9c;
              font-weight: bold;
              color: white;
              border-radius: 20px;
              width: 90%;
              height: 90%;
              padding-block: 8px;
              margin-left: 15px;
            ">
                            view
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
