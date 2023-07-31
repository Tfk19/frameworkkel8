@extends('layouts.app')
@section('content')
<div class=" text-center mx-auto mt-2 mb-4" style="width: 150px;">
    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">
  </div>
  <h3 class="text-center fs-2 fw-bold" style="color: #234E52; font-family: 'inter'; " ><b>TAJWIDKU</b></h3>
  <h3 class="text-center fs-1 fw-bold">FORM PENDAFTARAN </h3>
  <h3 class="text-center fs-1 fw-bold mb-5"> BIMBINGAN</h3>

    <div class="">
        <div class="col">
            <div class="card" style="background-color:  #234E52; height: 40rem ">
                <div class="card-body" >
                    <form method="POST" action="{{ route('Bimbingan.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <input class="form-control @error ('firstName') is-invalid @enderror " type="hidden" name="iduser" id="iduser" value="{{Auth::user()->id}}">
                            <label for="nama" class="col-md-8 mx-auto fw-bold mt-5 fs-5" style="color: #ffffff">Nama :    {{ Auth::user()->name }}</label>

                            <div class="col-md-8 mx-auto mt-2">
                                {{-- <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="umur" class="col-md-8 mx-auto fw-bold fs-5" style="color: #ffffff">{{ __('Umur') }}</label>

                            <div class="col-md-8 mx-auto mt-2">
                                <input id="umur" type="number" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" required autocomplete="umur">

                                @error('umur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="domisili" class="col-md-8 mx-auto fw-bold fs-5" style="color: #ffffff">{{ __('Domisili') }}</label>

                            <div class="col-md-8 mx-auto mt-2">
                                <input id="domisili" type="text" class="form-control @error('domisili') is-invalid @enderror" name="domisili" required autocomplete="domisili">

                                @error('domisili')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="type" class="form-label">Method Bimbingan</label>
                            <select name="type" id="type" class="form-select">
                                <option value="">pilih metode</option>
                                <option value="online">Online</option>
                                <option value="ofline">Offline</option>
                            </select>
                            @error('type')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="jam" class="form-label">Method Bimbingan</label>
                            <select name="jam" id="jam  " class="form-select">
                                <option value="">pilih waktu</option>
                                <option value="pagi">Pagi</option>
                                <option value="siang">Siang</option>
                                <option value="malam">Malam</option>
                            </select>
                            @error('jam')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="ustad" class="form-label">Pilih Ustad</label>
                            <select name="ustad" id="ustad" class="form-select">
                                <option value="">pilih ustad</option>
                                @foreach ($datas as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                            @error('jam')
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
