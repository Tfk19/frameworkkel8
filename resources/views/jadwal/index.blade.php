@extends('layouts.app')
@section('content')
<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="employeeTable">
        <thead>
            <tr>
                <th>ustad</th>
                <th>type</th>
                <th>waktu</th>

                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->user->name }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->waktu }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection
