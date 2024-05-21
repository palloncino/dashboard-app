@extends('layout.app')

@section('title', 'Edit Device')

@section('content')
    <h1>Edit Device</h1>
    <form action="{{ route('devices.update', $device->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $device->name }}" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="{{ $device->type }}" required>
        </div>
        <div>
            <label for="serial_number">Serial Number:</label>
            <input type="text" id="serial_number" name="serial_number" value="{{ $device->serial_number }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $device->description }}</textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ $device->status }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
