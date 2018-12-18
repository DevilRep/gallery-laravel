<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MyGallery - @yield('title')</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
        @section('styles')
        @show
    </head>
    <body>
        <div class="page @yield('class')">
            @include('header')
            <div class="container">
                @yield('content')
            </div>
            @include('footer')
        </div>
    </body>
</html>
