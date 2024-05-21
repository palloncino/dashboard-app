@extends('layout.app')

@section('title', 'Devices')

@section('content')
    <h1>Devices List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Serial Number</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->name }}</td>
                    <td>{{ $device->type }}</td>
                    <td>{{ $device->serial_number }}</td>
                    <td>{{ $device->description }}</td>
                    <td>{{ $device->status }}</td>
                    <td>{{ $device->created_at }}</td>
                    <td>{{ $device->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
