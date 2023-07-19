<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @stack('scripts')
</body>
<div class="footer">
    <div class="row">
        <div class="footer-col">
            <div class="social-links">
                <img class=" navbar-brand mb-0 h1" style="width: 200px; margin-top:50px"
        src="{{ Vite::asset('resources/images/logotajwidkuputih.png') }}" alt="image" href="{{ route('home') }}">
            </div>
        </div>
        <div class="footer-col">
            <ul>
            <h4><b>Tentang Tajwidku</b></h4>
                <li><a href="#">Pengertian</a></li>
                <li><a href="#">Tujuan  </a></li>
                <li><a href="#">Hukum</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <ul>
            <h4><b>Materi</b></h4>
                <li><a href="#">Hukum Nun Sukun</a></li>
                <li><a href="#">Hukum Mim Sukun</a></li>
                <li><a href="#">Mad</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <ul>
            <h4><b>Bimbingan</b></h4>
                <li><a href="#">Pelajar</a></li>
                <li><a href="#">Pengajar</a></li>
            </ul>
        </div>
    </div>
</div>
</html>
