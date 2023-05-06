<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/app.scss')
    <title>@yield('title', 'Welcome')</title>
</head>
<body>
    @include('partials.header')

    <main>
        @include('partials.jumbo')
        @yield('main')
    </main>

    @include('partials.footer')
</body>
</html>
