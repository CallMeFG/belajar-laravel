<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog Sederhana Saya</title>
</head>

<body>
    <header>
        <h1>Blog Sederhana</h1>
        @include('partials._navigation')
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
    <hr>
    @include('partials._footer')
</body> 
</html>