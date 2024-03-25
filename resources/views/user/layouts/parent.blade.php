<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/BST5/css/bootstrap.min.css" />
    @yield('css')

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary shadow text-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html">
                <img src="/img/log2.png" alt="Bootstrap" width="89" />
            </a>
            <a class="title" href="/">DPill</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('detection.index') }}">pill detection</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('interaction.index') }}">pill interaction</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('blog.index') }}">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contantus.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('profile.index') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Profile
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="profile.html">Settings </a>
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')


    <!-- footer -->
    <footer class="foot text-center">
        <p>&copy; 2024 Pill Detection. All rights reserved.</p>
    </footer>

    <!--JavaScript! -->
    <script src="/BST5/js/bootstrap.bundle.js"></script>
    <script src="/js/script.js"></script>
    @yield('js')
</body>

</html>
