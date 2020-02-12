<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Саморезы в ленте СПБ</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('head')

</head>
<body class="has-navbar-fixed-top">
<div id="app">

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
