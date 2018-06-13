<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    </head>
    <body class="font-sans antialiased bg-beige-light text-black">

        <div id="app">
            <div class="bg-blue-darker mb-6">
                @include('layouts.partials.topnav')
            </div>
            <div class="container mx-auto">
                @yield('body')
            </div>
            <div class="bg-white border-t-2 border-beige fixed pin-b pin-x">
                @include('layouts.partials.footer')
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
