<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/favicon.ico') }}">
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
