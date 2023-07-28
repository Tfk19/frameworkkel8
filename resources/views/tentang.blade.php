@extends('layouts.app')

@section('content')
<div class="ms-0 ps-0 me-0 container">
    <img class="img ms-0 me-0 ps-0 card-img-top card-img-fluid" src="{{ Vite::asset('resources/images/gambarutama.png') }}" alt="main logo">
    <img class="rounded mx-auto ms-5 pt-5 mt-5 mb-auto card-img-overlay img-fluid" style="width: 700px;margin-top:200px;" src="{{ Vite::asset('resources/images/selamatdatang.png') }}" alt="text main">
    <button type="button" class="btn btn-light btn-lg col-2 "style="margin-top:-120px;margin-left:25px;height:50px"><b  style="color: #234E52">DAFTAR SEKARANG</b></button>
    <div class="aa">
    <button type="button" class="aa btn btn-success btn-lg col-2  "style="margin-left:270px;margin-top:-120px;height:50px"><b>LEBIH LANJUT</b></button>
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
  <h3 class="text-center fs-1 fw-bold" style="color: #234E52; font-family: 'inter';" >TAJWIDKU</h3>
  <h3 class="text-center fs-2 fw-bold">“Merupakan Website Penyedia Jasa Pembelajaran Tajwid Secara Offine </h3>
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
        <h5 class="card-title mt-5  pt-4 ms-4 fs-2 " style="color: #234E52">Seorang muslim harus dapat membaca ayat Al-Quran sesuai ilmu tajwid.
            Ilmu tajwid merupakan ilmu yang sulit jika tidak dipelajari, sehingga banyak orang yang kurang memahaminya.
            Hal ini menyebabkan kurangnya minat mahasiswa dalam memahami ilmu tajwid,
            karena waktu mereka yang banyak tersita oleh kegiatan lain dan tidak adanya orang yang membantu mereka.
             Melihat permasalahan tersebut dibuatlah <p class="fw-bold">Program TajwidKu.</p></h5>


      </div>
    </div>
    <div class="card-group" style="height: 25rem">
        <div class="card">
          <img src="{{ Vite::asset('resources/images/frame.png') }}" class="card-img-top mx-auto mt-5 " style="width: 20rem" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold fs-3 text-center">Merupakan </h5>
            <h5 class="card-title fw-bold fs-3 text-center">pengetahuan tentang </h5>
            <h5 class="card-title fw-bold fs-3 text-center">kaidah serta cara-cara </h5>
            <h5 class="card-title fw-bold fs-3 text-center">membaca Al-Qur’an</h5>
            <h5 class="card-title fw-bold fs-3 text-center">dengan sebaik-baiknya.</h5>
          </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('resources/images/frame1.png') }}" class="card-img-top mx-auto mt-5 " style="width: 20rem" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold fs-3 text-center">Memelihara Bacaan Al- </h5>
            <h5 class="card-title fw-bold fs-3 text-center">Qur'an Dari Kesalahan</h5>
            <h5 class="card-title fw-bold fs-3 text-center">Membaca </h5>
          </div>
        </div>
        <div class="card">
            <img src="{{ Vite::asset('resources/images/frame2.png') }}" class="card-img-top mx-auto mt-5 " style="width: 20rem" alt="...">
          <div class="card-body">
            <h5 class="card-title fw-bold fs-3 text-center">Belajar Ilmu Tajwid Adalah Fardhu Kifayah & Membaca Al-Qur'an Sesuai Ilmu Tajwid Adalah Fardhu 'Ain</h5>
          </div>
        </div>
      </div>

    <div class="card text-bg-dark mt-5">
    <img src="{{ Vite::asset('resources/images/panjang.png') }}" class="card-img" style="height: 30rem" alt="...">
    <div class="card-img-overlay text-end me-5 mt-5">
        <h5 class="card-title mt-5 fs-1  " >Ingin Belajar</h5>
        <h5 class="card-title fs-1 fw-bold " >Ilmu Tajwid Dari</h5>
        <a href="#" class="btn btn-light btn-lg">Daftar Sekarang</a>
      <p class="card-text mt-2"><small>Bergabung Dengan Peserta Lainnya</small></p>
    </div>
  </div>


@endsection
