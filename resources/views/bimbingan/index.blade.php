@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Position</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Bimbingans as $Bimbingan)
                <tr>
                    <td>{{ $Bimbingan->firstname }}</td>
                    <td>{{ $Bimbingan->lastname }}</td>
                    <td>{{ $Bimbingan->email }}</td>
                    <td>{{ $Bimbingan->age }}</td>
                    <td>{{ $Bimbingan->position->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('Bimbingans.show', ['Bimbingan' => $Bimbingan->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                            <a href="{{ route('Bimbingans.edit', ['Bimbingan' => $Bimbingan->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                            <div>
                                <form action="{{ route('Bimbingans.destroy', ['Bimbingan' => $Bimbingan->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
