@extends('layout.app')

@section('title', 'Edit User')

@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ $user->username }}" required>
        </div>
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" value="{{ $user->firstName }}" required>
        </div>
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" value="{{ $user->lastName }}" required>
        </div>
        <div>
            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" name="companyName" value="{{ $user->companyName }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label for="role">Role:</label>
            <input type="text" id="role" name="role" value="{{ $user->role }}" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
