<!DOCTYPE html>
<html lang="fa" dir='rtl'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    @vite('resources/css/app.scss')
</head>

<body class="antialiased">

    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-phone />
</body>

</html>
