<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div style='float: left;margin-right: 40px;'>
        @section('sidebar')
            This is the master sidebar.
        @show
        </div>

        <div class="container" style='float:left;'>
            @yield('content')
        </div>
    </body>
</html>