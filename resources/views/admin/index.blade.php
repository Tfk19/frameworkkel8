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
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->firstname }}</td>
                    <td>{{ $admin->lastname }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->age }}</td>
                    <td>{{ $admin->position->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admins.show', ['admin' => $admin->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                            <a href="{{ route('admins.edit', ['admin' => $admin->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                            <div>
                                <form action="{{ route('admins.destroy', ['admin' => $admin->id]) }}" method="POST">
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
