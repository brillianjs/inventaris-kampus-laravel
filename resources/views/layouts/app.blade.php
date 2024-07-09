<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Informasi Manajemen Inventaris (SIMI)</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/5f815bdce1.js" crossorigin="anonymous"></script>

    <!-- Toaster -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Datatables -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <style>
        p {
            font-family: 'Nunito', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background-color: #242e4a;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 26px;
            background: #242e4a;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }

        #sidebar ul.components {
            padding: 20px 0;
            /* border-bottom: 1px solid #47748b; */
        }

        #sidebar ul p {
            color: #black;
            padding: 10px;
        }

        #sidebar>ul>li {
            padding-inline: 10px;
            border-radius: 0px;
        }

        #sidebar ul li a {
            padding: 10px 20px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar>ul>li>a>span {
            margin-left: 10px;
        }

        #sidebar ul li.active>a,
        [aria-expanded="true"],
        #sidebar ul li:hover>a {
            color: #fff;
            background: #6d7fcc;
            border-radius: 0px;
            transition: all 0.5s;
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
    </style>

</head>

<body>
    <div class="wrapper" style="margin-top: 80px; height:100vh; box-sizing:border-box">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md shadow-sm fixed-top"
            style="background-color:#242e4a; width:100%; right:0; left:0">
            <div class="container py-2">
                @auth
                    <div id="content" style="margin-right:60px">
                        <button type="button" id="sidebarCollapse" class="btn border">
                            <i class="fa fa-bars text-light"></i>
                        </button>
                    </div>
                @endauth
                <div class="d-flex justify-content-center align-items-center" style="height: 100%; width:fit-content">
                    <img src="/logo.png" alt="Logo UHB" style="width: 50px; height: 50px; margin-right:10px">
                    <a href="{{ url('/beranda') }}" class="text-decoration-none text-light">
                        <h5 style="margin-bottom: 0;">SIMI
                            @if (request()->path() !== '/')
                                <span class="navbar-brand text-light mx-3">/</span>
                            @endif
                            <span class="navbar-brand text-light">
                                @yield('title')
                            </span>
                        </h5>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fa-solid fa-bars"></i>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #fff"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: #fff"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #fff" id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div id="content" class="bg-light d-flex" style="width: 100%;">

            @auth
                <nav id="sidebar">
                    {{-- <div class="sidebar-header">
                        <img src="/logo.png" alt="Logo UHB" style="width: 50px" height="50px">
                        <h4 href="{{ url('/beranda') }}">
                            SIMI
                        </h4>
                    </div> --}}
                    <ul class="list-unstyled components">
                        <li class="{{ Request::is('beranda') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/beranda') }}" style="color: #fff; ">
                                <i class="fa-sharp fa-solid fa-home"></i> <span>Beranda</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('data-masuk') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/data-masuk') }}" style="color: #fff">
                                <i class="fa-sharp fa-solid fa-box"></i> <span>Data Barang Masuk</span>
                            </a>
                        </li>

                        <li class="{{ Request::is('data-penyimpanan') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/data-penyimpanan') }}" style="color: #fff">
                                <i class="fa-sharp fa-solid fa-warehouse"></i> <span>Data Penyimpanan</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('data-peminjaman') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/data-peminjaman') }}" style="color: #fff">
                                <i class="fa-sharp fa-solid fa-hand-holding"></i> <span>Data Peminjaman</span>
                            </a>
                        </li>
                        {{-- <li class="{{ Request::is('data') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ url('/data-masuk') }}" style="color: #fff">
                                <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i> <span>Data Perbaikan</span>
                            </a>
                        </li> --}}

                    </ul>
                </nav>
            @endauth

            <div class="py-4 d-flex justify-content-center align-items-top" style="width:100%">
                @yield('content')
            </div>

        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>

    <script>
        function changeIcon() {
            var icon = document.getElementById("menuIcon");
            if (icon.classList.contains("fa-bars")) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");
            } else {
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            }
        }
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>

</body>

</html>
