<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>@yield('title', 'Example App')</title>
    </head>
    <body>
        <x-navigation-menu />

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
