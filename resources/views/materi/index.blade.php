@extends('layouts.app')

@section('content')
<div class="ms-0 ps-0 me-0">
    <img class="img ms-0 me-0 ps-0 card-img-top card-img-fluid" src="{{ Vite::asset('resources/images/gambarutama.png') }}" alt="main logo">
    <img class="rounded ms-4 ps-4 card-img-overlay img-fluid animated bounceInDown" style="width: 450px;margin-top:400px;" src="{{ Vite::asset('resources/images/materitajwid.png') }}" alt="text main">

</div>
<br>
<br>
<div class=" text-center mx-auto mt-2 mb-4" style="width: 150px;">
    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">

</div>
  <h3 class="text-center mt-0 fs-1 fw-bold" style="color: #234E52; font-family: 'inter';" ><b>TAJWIDKU</b></h3>
  <h1 class="text-center" style="color:black">HUKUM NUN SUKUN DAN TANWIN</h1>


  <div class="card-group col-12 mt-5 pt-1" style="height: 25rem;">
    <div class="card-group col-4" style="border: none">
      <img class="card-img-top img col-1" src="{{ Vite::asset('resources/images/kotak.png') }}" >
      <div class="card-img-overlay" style="margin-top: 1160px">
        {{-- <h5 class="card-title mt-5 pt-4 ms-4 fs-2 fw-light " style="color: #ffffff">Apa Saja</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #ffffff">Hukum Nun Sukun</h5>
        <h5 class="card-title ms-4 fs-2  fw-bold" style="color: #ffffff">Dan Tanwin</h5> --}}
        {{-- <h5 class="card-title ms-4 fs-2 " style="color: #ffffff">Dalam Tajwid?</h5> --}}
      </div>

    </div>
    <div class="card">
      <div class="card-body"  style="background-color:  #E2E8F0">
        <br>
        <h5 class="card-title mt-2 pt-0 ms-4 fs-2 " style="text-align:justify;color: #234E52">Hukum Nun Sukun dan Tanwin ada <b>5 macam</b>, yaitu :
           <br>
            <br>1. Idzhar Halqi
           <br>2. Idhgom Bi Ghunnah
           <br>3. Idhgom Bila Ghunnah
            <br>4.Iqlab
            <br>5. Ikhfa’ Haqiqi</h5>
      </div>
    </div>
  </div>
    <div class="card-body"  style="background-color:  #ffffff">
        <br>
        <h5 class="card-title mt-2 mb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #234E52"><b>Idzhar Halqi</b>
            <br>
            Idzhar Halqi ialah nun sukun atau tanwin bertemu salah satu huruf :
            <br>
            ا,ح,خ,ع,غ,ه
            <br>
            Contoh :
            منه
    </div>
    <div class="card-body"  style="background-color:  #234E52">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #ffffff"><b>Idgham Bi Ghunnah</b>
            <br>
            Idgham Bi Ghunnah ialah nun sukun atau tanwin bertemu salah satu huruf :
            <br>
            ي,ن,م,و
            <br>
            Contoh :
            من يقول
    </div>
    <div class="card-body"  style="background-color:  #ffffff">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #234E52"><b>Idgham Bila Ghunnah</b>
            <br>
            Idgham Bila Ghunnah ialah nun sukun atau tanwin bertemu salah satu huruf :
            <br>
            ل,ر
            <br>
            Contoh :
            من ربكم
    </div>
    <div class="card-body"  style="background-color:  #234E52">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #ffffff"><b>Iqlab</b>
            <br>
            Iqlab ialah nun sukun atau tanwin bertemu dengan huruf :
            <br>
            ب
            <br>
            Contoh :
            من بعد
    </div>
    <div class="card-body"  style="background-color:  #ffffff">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #234E52"><b>Ikhfa' Haqiqi</b>
            <br>
            Ikhfa' Haqiqi ialah nun sukun atau tanwin bertemu salah satu huruf :
            <br>
            ت,ث,ج,د,ذ,ز,س,ش,ص,ض,ط,ظ,ف,ق,ك
            <br>
            Contoh :
            من تحت
    </div>

    <div class="card-group col-12 mt-0 pt-1" style="height: 25rem;">
        <div class="card-group col-4" style="border: none">
          <img class="card-img-top img col-1" src="{{ Vite::asset('resources/images/kotak.png') }}" >
          <div class="card-img-overlay" style="margin-top: 1160px">
            <h5 class="card-title mt-5 pt-4 ms-4 fs-2 fw-light " style="color: #ffffff">Apa Saja</h5>
            <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #ffffff">Hukum Mim Sukun</h5>
            <h5 class="card-title ms-4 fs-2 " style="color: #ffffff">Dalam Tajwid?</h5>
          </div>

        </div>
        <div class="card">
          <div class="card-body"  style="background-color:  #E2E8F0">
            <br>
            <h5 class="card-title mt-2 pt-0 ms-4 fs-2 " style="text-align:justify;color: #234E52">Hukum Mim Sukun ada <b>3 macam</b>, yaitu :
               <br>
                <br>1. Idzhar Syafawi
               <br>2. Ikhfa' Syafawi
               <br>3. Idhgom Mimi
          </div>
        </div>
      </div>
      <div class="card-body"  style="background-color:  #ffffff">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #234E52"><b>Idzhar Syafawi</b>
            <br>
            Idzhar Syafawi ialah mim bertemu salah satu huruf <b>selain huruf م,ب</b>
            <br>
            Contoh :
            انعت
    </div>
    <div class="card-body"  style="background-color:  #234E52">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #ffffff"><b>Ikhfa' Syafawi</b>
            <br>
            Ikhfa' Syafawi ialah mim sukun bertemu dengan huruf :
            <br>
            ب
            <br>
            Contoh :
            اعتصم بااللّه
    </div>
    <div class="card-body"  style="background-color:  #ffffff">
        <br>
        <h5 class="card-title mt-2 mb-0 pb-4 pt-0 ms-4 fs-2 " style="text-align:center;color: #234E52"><b>Idhgam Mimi</b>
            <br>
            Idgham Mimi ialah mim sukun bertemu dengan huruf :
            <br>
            م
            <br>
            Contoh :
            و مالهم من اللّه
    </div>

    <div class="card text-bg-dark mt-5">
    <img src="{{ Vite::asset('resources/images/panjang.png') }}" class="card-img" style="height: 30rem" alt="...">
    <div class="card-img-overlay text-end me-5 mt-5">
        <h5 class="card-title mt-5 fs-1  " >Ingin Belajar</h5>
        <h5 class="card-title fs-1 fw-bold " >Ilmu Tajwid Dari</h5>
        <a href="{{ route('Bimbingan.create') }}" class="btn btn-light btn-lg">Daftar Sekarang</a>
      <p class="card-text mt-2"><small>Bergabung Dengan Peserta Lainnya</small></p>
    </div>
  </div>

@endsection
