@extends('layouts.app')

@section('content')
<div class=" text-center mx-auto mt-2 mb-4" style="width: 150px;">
    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">
  </div>
  <h3 class="text-center fs-2 fw-bold" style="color: #234E52;font-family: sans-serif" ><b>TAJWIDKU</b></h3>
  <h3 class="text-center fs-1 fw-bold">FORM PENDAFTARAN </h3>
  <h3 class="text-center fs-1 fw-bold mb-5"> BIMBINGAN</h3>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5" style="background-color:  #234E52; ">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 mt-5">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-white fw-bold">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-white fw-bold">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end text-white fw-bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end text-white fw-bold">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end text-white fw-bold">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select name="role" id="role" class="form-select">
                                    <option value="">Pilih Role</option>
                                    <option value="pelajar">Pelajar</option>
                                    <option value="pengajar">Pengajar</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-light">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
