<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles COMPONENT -->
        @component('laravel1.style')
        @endcomponent
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @yield('route_name')
                </div>

                <div class="nicknames">
                    @yield('nicknames')
                </div>

                <div class="links">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
