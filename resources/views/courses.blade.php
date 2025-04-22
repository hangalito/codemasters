<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos Code Masters</title>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="{{asset('js/script.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
<x-navbar active-page="courses"></x-navbar>
Cursos Code Masters
</body>
</html>
