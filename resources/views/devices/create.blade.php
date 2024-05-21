@extends('layout.app')

@section('title', 'Create Device')

@section('content')
    <h1>Create Device</h1>
    <form action="{{ route('devices.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" required>
        </div>
        <div>
            <label for="serial_number">Serial Number:</label>
            <input type="text" id="serial_number" name="serial_number" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
