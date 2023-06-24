<!DOCTYPE html>
<html lang="fa" dir='rtl'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    @vite('resources/css/app.scss')
    <script src="//unpkg.com/alpinejs"></script>
</head>

<body class="antialiased">
    <x-whatsapp />
    <x-navbar />
    <main>
        @yield('content')
    </main>
    <x-phone />
</body>

</html>
