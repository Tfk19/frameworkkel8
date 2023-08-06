@extends('layouts.app')
@section('content')
<div class=" text-center mx-auto mt-2 mb-4" style="width: 150px;">
    <img class="card-img-top img-fluid img" src="{{ Vite::asset('resources/images/LogoTajwid.png') }}" alt="...">
  </div>
  <h3 class="text-center fs-2 fw-bold" style="color: #234E52;font-family: sans-serif" ><b>TAJWIDKU</b></h3>
  <h3 class="text-center fs-1 fw-bold">DATA MASTER</h3>
  <h3 class="text-center fs-1 fw-bold mb-5"> BIMBINGAN TAJWIDKU</h3>
  {{-- <div class="col-lg-3 col-xl-6">
    <ul class="list-inline mb-0 float-end">
        <li class="list-inline-item">
            <a href="{{ route('employees.exportExcel') }}" class="btn btn-outline-success">
                <i class="bi bi-download me-1"></i> to Excel
            </a>
        </li>
        <li class="list-inline-item">
            <a href="{{ route('employees.exportPdf') }}" class="btn btn-outline-danger">
                <i class="bi bi-download me-1"></i> to PDF
            </a>
        </li>
        <li class="list-inline-item">|</li> --}}


    </ul>
    </div>
<hr>
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="bimbinganTable">
        <thead>
            <tr>
                <th class="text-center">Nama User</th>
                <th class="text-center">Pengajar</th>
                <th class="text-center">Type</th>
                <th class="text-center">Waktu</th>
                <th class="text-center">Link WA</th>


                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td class="text-center">{{ $data->name}}</td>
                    <td class="text-center">{{ $data->user->name }}</td>
                    <td class="text-center">{{ $data->type }}</td>
                    <td class="text-center">{{ $data->waktu }}</td>
                    <td class="text-center"> <a class="bi-box-arrow-in-right fw-bold text-success" style="text-decoration:none" href="{{$data->linkwa }}">  Masuk Group Whatsapp </td>

                </tr>
            @endforeach
        </tbody>

    </table>
</div>
</div>
  @endsection
