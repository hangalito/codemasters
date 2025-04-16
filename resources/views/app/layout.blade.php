<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ config('app.name') }}</title>
    @yield('stylesheets')
</head>
<body>
<x-navbar active-page="home"></x-navbar>
<main>
    @yield('content')
</main>
</body>
</html>
