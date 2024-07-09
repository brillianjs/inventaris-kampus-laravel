<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Manajemen Inventaris (SIMI)</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="d-flex" style="height:100vh; box-sizing:border-box;">
    <div class="d-flex align-items-center justify-content-center text-light"
        style="width: 100%; height: 100vh; background-color:#242e4a; padding:80px">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/beranda') }}">
                    Home
                </a>
            @else
                <div class="text-left">
                    <h3 class="mb-5">Selamat datang di Sistem Informasi Manajemen Inventaris (SIMI)!</h3>
                    <p>Kelola inventaris Anda dengan mudah dan efisien menggunakan SIMI. Dengan fitur pencatatan
                        inventaris yang lengkap, Anda dapat
                        melacak semua aset dengan cepat. Tidak hanya itu, SIMI dilengkapi dengan fitur pelaporan yang
                        canggih,
                        memudahkan Anda untuk membuat laporan inventaris secara rinci dan akurat.
                    </p>
                    <p class="mb-5">
                        Dengan SIMI, Anda dapat
                        menghemat waktu dan tenaga dalam mengelola inventaris perusahaan Anda. Mulailah sekarang dan
                        rasakan
                        kemudahan serta efisiensi dalam mengelola inventaris perusahaan Anda!
                    </p>
                    <a href="{{ route('login') }}" class="btn border text-light bg-primary mb-3">
                        Mulai Aplikasi
                    </a>
                    @if (Route::has('register'))
                        <div>Apakah anda belum memiliki akun?
                            <a href="{{ route('register') }}">
                                Register
                            </a>
                        </div>
                    @endif
                </div>
            @endauth
        @endif
    </div>

    <div class="d-flex align-items-center justify-content-center p-5" style="width: 50%; height:100% ">
        <div class="img-container">
            <img src="./inventaris.png" alt="inventaris" width="500px" height="500px">
        </div>
    </div>

</body>
<style>
    .img-container {
        width: 500px;
        height: 500px;
        overflow: hidden;
    }

    .img-container img {
        transition: transform 300ms ease-in-out;
    }

    .img-container img:hover {
        transform: scale(1.1);
    }
</style>

</html>
