@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-light">
    <div class="container">
        <i class="hexagon-fill me-2"></i>
        <img class=" navbar-brand mb-0 ms-5 h1 img-fluid" style="width: 150px"
        src="{{ Vite::asset('resources/images/logotajwidku.png') }}" alt="image" href="{{ route('home') }}">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon text-black" style="color: red"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">



            <div class="collapse navbar-collapse text-black" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto text-black">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav d-flex flex-row flex-wrap ms-auto">
                    <li class="nav-item col-2 col-md-auto ps-3" style="">
                        <a href="{{ route('home') }}" class="nav-link @if($currentRouteName == 'home') active @endif text-black">Home</a></li>
                    <li class="nav-item col-2 col-md-auto ps-3 ">
                        <a href="" class="nav-link @if($currentRouteName == 'tentang.index') active @endif text-black">Tentang Tajwidku</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto ps-3 ">
                        <a href="" class="nav-link @if($currentRouteName == 'materi.index') active @endif text-black">Materi</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto ps-3 ">
                        <a href="{{ route('Bimbingan.index') }}" class="nav-link @if($currentRouteName == 'bimbingan.index') active @endif text-black">Bimbingan</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto ps-3"><a href="{{ route('jadwal') }}" class="nav-link @if($currentRouteName == 'jadwal.index') active @endif text-black">Jadwalku</a>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item text">

                                <a class="nav-link text fw-bold" style="color: red" href="{{ route('login') }}">{{ __('Login') }}</a>

                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text fw-bold" style="color: red" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold"  style="color: #234E52" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a  class="btn my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
                                <a class="dropdown-item bi bi-lock-fill me-1" style="color: red" href="{{ route('logout') }}"
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
                <button class="navbar-toggler text-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-black" style="color: red"></span>
                </button>

            </div>
        </div>
    </div>
</nav>
