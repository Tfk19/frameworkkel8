@extends('layouts.app')

@section('content')

<div class=" text-center mx-auto mt-2 mb-4" style="width: 150px;">
    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">
  </div>
  <h3 class="text-center fs-2 fw-bold" style="color: #234E52; font-family: 'inter'; " ><b>TAJWIDKU</b></h3>
  <h3 class="text-center fs-1 fw-bold">FORM PENDAFTARAN </h3>
  <h3 class="text-center fs-1 fw-bold mb-5"> AKUN</h3>

    <div class="">
        <div class="col">
            <div class="card" style="background-color:  #234E52; height: 40rem ">
                <div class="card-body" >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">

                            <label for="name" class="col-md-8 mx-auto fw-bold mt-5 fs-5" style="color: #ffffff">{{ __('Nama') }}</label>

                            <div class="col-md-8 mx-auto mt-2">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-8 mx-auto fw-bold fs-5" style="color: #ffffff">{{ __('Email Address') }}</label>

                            <div class="col-md-8 mx-auto mt-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-8 mx-auto fw-bold fs-5" style="color: #ffffff">{{ __('Password') }}</label>

                            <div class="col-md-8 mx-auto mt-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-8 mx-auto fw-bold fs-5" style="color: #ffffff">{{ __('Re-Password') }}</label>

                            <div class="col-md-8 mx-auto mt-2 ">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="no-hp" class="col-md-8 mx-auto fw-bold fs-5" style="color: #ffffff">{{ __('No-HP') }}</label>

                            <div class="col-md-8 mx-auto mt-2 ">
                                <input id="no-hp" type="integer" class="form-control @error('no-hp') is-invalid @enderror" name="no-hp" value="{{ old('no-hp') }}" required autocomplete="no-hp" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-select">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ old('position') == $position->id ? 'selected' : '' }}>{{ $position->code.' - '.$position->name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>


                        <div class="row">
                            <div class="mx-auto"></div>">
                                <button type="submit" class="btn btn-light btn-lg col-2 mx-auto "style="margin-top:50px;margin-left:25px;height:50px"><b
                                    style="color: #234E52">Submit</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div>
    <p class="text-center fs-2 mt-5 fw-bold">Lebih Dari</p>
 <p class="text-center fw-bold" style="font-size: 120px; color:#234E52">1000 + PESERTA</P>
    <p class="text-center fs-2 mb-5 fw-bold">Telah Mengikuti Program Ini</p>

</div>

@endsection
