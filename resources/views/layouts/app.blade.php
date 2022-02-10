<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        @yield('main_content')
    </main>
    <div>
        @include('partials.info')
    </div>
    <div>
        @include('partials.footer-jumbotron')
    </div>
    @include('partials.footer')
</body>
</html>