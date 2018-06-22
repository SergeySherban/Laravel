<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyCV') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> @include('layouts.parts.styles')
</head>

<body id="page-top">
    <!-- Navigation -->
    @include('layouts.parts.nav')

    <!-- Main content with sections-->
    <div class="container-fluid p-0">
        @yield('content')
    </div>

    <!-- Scripts -->
    @include('layouts.parts.scripts')

</body>

</html>