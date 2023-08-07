@extends('layouts.app')
@section('content')
<form action="{{ route('Bimbingan.update', ['Bimbingan' => $bimbingan->id]) }}" method="POST">
    @csrf
    @method('put')
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-6">
            <div class="mb-3 text-center">
                <i class="bi-person-circle fs-1"></i>
                <h4>Edit Bimbingan</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $errors->any() ? old('name') : $bimbingan->name }}" placeholder="Enter name">
                    @error('name')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="pengajar" class="form-label">Pengajar</label>
                    <select name="pengajar" id="pengajar" class="form-select">
                        @php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('pengajar');
                            else
                                $selected = $bimbingan->pengajar;
                        @endphp
                        @foreach ($bimbingans as $bimbingan)
                            <option value="{{ $bimbingan->id }}" {{ $selected == $bimbingan->id ? 'selected' : '' }}>{{ $bimbingan->code.' - '.$bimbingan->name }}</option>
                        @endforeach
                    </select>
                    @error('pengajar')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type" class="form-select">
                        @php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('type');
                            else
                                $selected = $bimbingan->type;
                        @endphp
                        @foreach ($bimbingans as $bimbingan)
                            <option value="{{ $bimbingan->type }}" {{ $selected == $bimbingan->type ? 'selected' : '' }}>{{ $bimbingan->code.' - '.$bimbingan->type }}</option>
                        @endforeach
                    </select>
                    @error('type')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="waktu" class="form-label">Waktu</label>
                    <select name="waktu" id="waktu" class="form-select">
                        @php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('waktu');
                            else
                                $selected = $bimbingan->waktu;
                        @endphp
                        @foreach ($bimbingans as $bimbingan)
                            <option value="{{ $bimbingan->id }}" {{ $selected == $bimbingan->id ? 'selected' : '' }}>{{ $bimbingan->code.' - '.$bimbingan->waktu }}</option>
                        @endforeach
                    </select>
                    @error('waktu')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 d-grid">
                    <a href="{{ route('Admin.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                </div>
                <div class="col-md-6 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
