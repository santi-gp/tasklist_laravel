<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper">
        <header class="flex-row bgc-1 ai-center jc-between color-1 p-2">
            <div class="f-grow1 ">
                <strong>LOGO</strong>
            </div>
            <nav class="f-grow3">
                <ul class="flex-row jc-around">
                    <li><a class="color-1" href="/">Inicio</a></li>
                    <li><a class="color-1" href="{{route('tasks.index')}}">Tareas</a></li>
                    <li><a class="color-1" href="{{route('tasks.create')}}">Crear</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2 class="my-1">
                @yield('subtitle')
            </h2>
            @yield('content')
        </main>
        <footer class="bgc-1 color-1">
            <p class="my-1 txt-center">&copy; 2022 | Ricardo Guevara.</p>
        </footer>
    </div>
    
</body>
</html>