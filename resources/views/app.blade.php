<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/blogs">Blog Lijst</a></li>
            <li><a href="{{ route('groceries.create') }}">Toevoegen</a></li>
        </ul>
    </nav>
    <br>
    @yield('body')
    @yield('create')
    @yield('edit')

</body>
</html>