<!DOCTYPE html>
<html lang="en" class="font-montserrat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bandage</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
    @include('bandage.navbar')

    <main class="bg-bg_light">
        @yield('content')
    </main>

</body>
</html>
