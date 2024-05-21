<!-- resources/views/devices/index.blade.php -->
@extends('layout.app')

@section('title', 'Devices')

@section('content')
    <h1>Devices</h1>
    <a href="{{ route('devices.create') }}" class="btn btn-primary">Add Device</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->name }}</td>
                    <td>{{ $device->type }}</td>
                    <td>{{ $device->status }}</td>
                    <td>
                        <a href="{{ route('devices.edit', $device->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('devices.destroy', $device->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
