@extends('layouts.app')

@section('content')
<div class="ms-0 ps-0 me-0">
    <img class="img ms-0 me-0 ps-0 card-img-top card-img-fluid" src="{{ Vite::asset('resources/images/gambarutama.png') }}" alt="main logo">
    <img class="rounded ms-4 ps-4 card-img-overlay img-fluid" style="width: 700px;margin-top:200px;" src="{{ Vite::asset('resources/images/selamatdatang.png') }}" alt="text main">
    <button type="button" class="btn btn-light btn-lg col-2 ms-5 "style="font-size:16px;margin-top:-500px;margin-left:25px;height:50px;border:none"><b><a href="{{ route('register') }}" style="text-decoration: none;color: #234E52; ">DAFTAR SEKARANG</a></b></button>
    <div class="aa">
    <button type="button" class="aa btn btn-success btn-lg col-2  "
    style="text-decoration:none ;font-size:16px;margin-left:270px;margin-top:-285px;height:50px;border:none">
    <b><a style="text-decoration:none;color:white"href="">LEBIH LANJUT</a></b></button>
    </div>
</div>

</div>
</div>
</div>
<br>
<br>
<div class=" text-center mx-auto mt-2 mb-4" style="width: 150px;">
    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">
  </div>
  <h3 class="text-center fs-1 fw-bold" style="color: #234E52; font-family: 'inter';" >خَيْرُكُمْ مَنْ تَعَلَّمَ القُرْآنَ وَ عَلَّمَهُ</h3>
  <h3 class="text-center fs-2 fw-bold">"Sebaik-Baik Diantara Kamu Adalah</h3>
  <h3 class="text-center fs-2 fw-bold mb-5"> Orang Yang Belajar Al-Qur'an dan Mengajarkannya"</h3>

  <div class="card-group" style="height: 25rem;">
    <div class="card">
      <img class="card-img-top img" src="{{ Vite::asset('resources/images/kotak.png') }}" >
      <div class="card-img-overlay">
        <h5 class="card-title mt-5 pt-4 ms-4 fs-2 fw-light " style="color: #ffffff">Ingin Bisa</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #ffffff">Mengaji Dengan</h5>
        <h5 class="card-title ms-4 fs-2  fw-bold" style="color: #ffffff">Lancar &</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #ffffff">Sesuai Kaidah</h5>
        <h5 class="card-title ms-4 fs-2 fst-normal " style="color: #ffffff">#siapmengaji</h5>
      </div>

    </div>
    <div class="card">
      <div class="card-body"  style="background-color:  #E2E8F0">
        <br>
        <h5 class="card-title mt-5  pt-4 ms-4 fs-2 " style="color: #234E52">Ingin Belajar</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #234E52">Ilmu Tajwid Dari</h5>
        <h5 class="card-title ms-4 fs-2  fw-bold" style="color: #234E52">Dasar ?</h5>
        <h5 class="card-title ms-4 fs-2 fst-normal " style="color: #234E52">#siapmengaji</h5>

      </div>
    </div>
    <div class="card">
      <div class ="card-body "  style="background-color:  #EDF2F7">
        <br>
        <h5 class="card-title mt-5 pt-4 ms-4 fs-2 " style="color: #234E52">Ingin Mengajarkan</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #234E52">Ilmu Tajwid Kepada Orang</h5>
        <h5 class="card-title ms-4 fs-2  fw-bold" style="color: #234E52">Lain ?</h5>
        <h5 class="card-title ms-4 fs-2 " style="color: #234E52">#siapmengaji</h5>
      </div>
    </div>
  </div>
  <p class="text-center fs-2 mt-5 fw-bold">Lebih Dari</p>
 <p class="text-center fw-bold" style="font-size: 120px; color:#234E52">1000 + PESERTA</P>
    <p class="text-center fs-2 fw-bold">Telah Mengikuti Program Ini</p>

    <div class="card text-bg-dark mt-5">
    <img src="{{ Vite::asset('resources/images/panjang.png') }}" class="card-img" style="height: 30rem" alt="...">
    <div class="card-img-overlay text-end me-5 mt-5">
        <h5 class="card-title mt-5 fs-1  " >Ingin Belajar</h5>
        <h5 class="card-title fs-1 fw-bold " >Ilmu Tajwid Dari</h5>
        <a href="#" class="btn btn-light btn-lg">Daftar Sekarang</a>
      <p class="card-text mt-2"><small>Bergabung Dengan Peserta Lainnya</small></p>
    </div>
  </div>

  <div class="card-group display: flex;" style="height: 25rem;">
    <div class="ms-4 mt-4 me-4 mb-4 pb-4 card display: flex;" style="outline: none">
      <img class="card-img-top img" style="width: 180px" src="{{ Vite::asset('resources/images/persegipanjang.png') }}" >
      <div class="card-img-overlay text-end me-3 " style="f">
        <h5 class="card-title fs-2 fw-light " style="color: #234E52">Ingin Bisa</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #234E52">Mengaji Dengan</h5>
        <h5 class="card-title ms-4 fs-2  fw-bold" style="color: #234E52">Lancar &</h5>
        <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #234E52">Sesuai Kaidah</h5>
        <h5 class="card-title ms-4 fs-2 fst-normal " style="color: #234E52">#siapmengaji</h5>
        <a href="#" class="mt-3 btn btn-success btn-lg aa">Daftar Sekarang</a>
      </div>
    </div>

      <div class="ms-4 mt-4 me-4 mb-4 pb-4 card display: flex;" style="outline: none">
        <img class="card-img-top img" style="width: 180px" src="{{ Vite::asset('resources/images/persegipanjang.png') }}" >
        <div class="card-img-overlay text-end me-3 " style="f">
          <h5 class="card-title fs-2 fw-light " style="color: #234E52">Ingin Bisa</h5>
          <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #234E52">Mengaji Dengan</h5>
          <h5 class="card-title ms-4 fs-2  fw-bold" style="color: #234E52">Lancar &</h5>
          <h5 class="card-title ms-4 fs-2 fw-bold " style="color: #234E52">Sesuai Kaidah</h5>
          <h5 class="card-title ms-4 fs-2 fst-normal " style="color: #234E52">#siapmengaji</h5>
          <a href="#" class="mt-3 btn btn-success btn-lg aa">Daftar Sekarang</a>
        </div>
      </div>

@endsection
