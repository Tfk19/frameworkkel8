@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Pelajar</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="user_id" class="form-label">ID Pelajar</label>
                        <h5>{{ $bimbingan->user_id }}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <h5>{{ $bimbingan->name }}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="umur" class="form-label">Age</label>
                        <h5>{{ $bimbingan->umur }}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="domisili" class="form-label">Domisili</label>
                        <h5>{{ $bimbingan->domisili}}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <h5>{{ $bimbingan->type }}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="waktu" class="form-label">Type</label>
                        <h5>{{ $bimbingan->waktu }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('Admin.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
