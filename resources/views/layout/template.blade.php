<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/favicon.ico') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        @vite('resources/css/app.css')

    </head>
    <body>
        {{-- NAV INCLUDE --}}
        @include('layout.navigation')
        {{-- CONTENT --}}
        <div class="container mx-auto">
            @yield('content')
        </div>
        @yield('additem')
        @yield('searchjs')
        @yield('modalshow')
    </body>
</html>
