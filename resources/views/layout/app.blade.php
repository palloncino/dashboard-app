<!-- resources/views/layout/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
