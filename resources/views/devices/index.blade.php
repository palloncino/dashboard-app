@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Devices</h1>
    <a href="{{ route('devices.create') }}" class="btn btn-primary">Create Device</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Serial Number</th>
                <th>Status</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\$devices as \$device)
                <tr>
                    <td>{{ \$device->id }}</td>
                    <td>{{ \$device->name }}</td>
                    <td>{{ \$device->serial_number }}</td>
                    <td>{{ \$device->status }}</td>
                    <td>{{ \$device->location }}</td>
                    <td>
                        <a href="{{ route('devices.edit', \$device->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('devices.destroy', \$device->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection