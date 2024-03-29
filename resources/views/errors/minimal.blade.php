<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >

    <title>@yield('title')</title>
</head>

<body>
<x-header/>
<main>
    <p class="error">
        @yield('code')
        -
        @yield('message')
    </p>
</main>
<x-footer/>
</body>

</html>

