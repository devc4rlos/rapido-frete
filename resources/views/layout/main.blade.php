<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">

    <title>@yield('title', 'Rápido Frete')</title>
    <meta name="description" content="@yield('description', 'Rápido Frete')" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('head')
    @stack('head')
</head>
<body>
    @yield('body')
    @stack('body')
</body>
</html>
