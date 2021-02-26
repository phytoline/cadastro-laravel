<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Digital">
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>Codestep Labs - 2021</p>
    </footer>
</body>

</html>