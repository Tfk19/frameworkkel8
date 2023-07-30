@extends('layouts.app')

@section('content')
<div class="container mb-5 " style="background-color: #234E52">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class=" text-center mx-auto mt-2 mb-4" style="width: 70px;">
                    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">
                  </div>
                  <h3 class="text-center fs-3 fw-bold mb-3" style="color: #234E52; font-family: 'inter';" >Login</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 250px" >
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                             @endif
                            </div>
                        </div>
                    </form>

                        <button type="button" class="btn btn-light btn-lg col-2 " style="margin-left: 250px;margin-bottom: px"><b><a href="{{ route('register') }}" style="text-decoration: none;color: #234E52; ">DAFTAR SEKARANG</a></b></button>
                    </li>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection
