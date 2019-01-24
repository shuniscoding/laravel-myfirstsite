<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laracast')</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About us</a>
    <a href="/contact">Contact us</a>
    @yield('content')
</body>
</html>