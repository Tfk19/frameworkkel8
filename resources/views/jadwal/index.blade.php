@extends('layouts.app')
@section('content')
<div class="ms-0 ps-0 me-0">
    <img class="img ms-0 me-0 ps-0 card-img-top card-img-fluid" src="{{ Vite::asset('resources/images/gambarutama.png') }}" alt="main logo">
    <img class="rounded ms-4 ps-4 card-img-overlay img-fluid animated bounceInDown" style="width: 500px;margin-top:400px;" src="{{ Vite::asset('resources/images/jadwal.png') }}" alt="text main">

</div>
<br>
<br>
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="bimbinganTable">
        <thead>
            <tr>
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
                    <td class="text-center">{{ $data->user->name }}</td>
                    <td class="text-center">{{ $data->type }}</td>
                    <td class="text-center">{{ $data->waktu }}</td>
                    <td class="text-center"> <a class="bi-box-arrow-in-right fw-bold text-success" style="text-decoration:none" href="{{$data->linkwa }}">  Masuk Group Whatsapp </td>

                </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection
