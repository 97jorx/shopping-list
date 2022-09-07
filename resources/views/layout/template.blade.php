<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        @vite('resources/css/app.css')

    </head>
    <body>

        {{-- NAV INCLUDE --}}
        @include('layout.navigation')

        {{-- CONTENT --}}
        <div class="container mx-auto">
            @yield('content')
        </div>

    </body>
</html>
