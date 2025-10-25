<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Navbar / Menu --}}
    @include('partials.menu')

    <div class="container mx-auto p-6">
        @yield('content')
    </div>

</body>
</html>

