<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>  
        <header class="px-7 bg-cyan-900">
            <h1 class= "py-5 text-xl font-bold text-white">Rick And Morty App</h1>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>
