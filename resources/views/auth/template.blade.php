<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{config('app.name')}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    @yield('stylesheet')
</head>
<body>@yield('main')
</body>
</html>
