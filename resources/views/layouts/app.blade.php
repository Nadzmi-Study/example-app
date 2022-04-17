<html>
    <head>
        <title>@yield('title', 'Example App')</title>
    </head>
    <body>
        <x-navigation-menu />

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
