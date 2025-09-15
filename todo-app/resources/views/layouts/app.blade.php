<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-App</title>
</head>
<body>
    <header>
        @include('partials._navbar')
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
    <hr>
    @include('partials._footer')
</body>
</html>