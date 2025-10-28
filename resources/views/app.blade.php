<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema')</title>
    @stack('css')
</head>

<body>
    <!--Manejo de directivas blade-->
    <header>
        <h1 class="mb-3 mt-3 display-5 text-center text-dark">Monitoreo web en tiempo real</h1>
    </header>
    @include('partials.menu')
    <main>
        @yield('contenido')
    </main>
    <footer class="lead container">
        <p>2025 - Sistema</p>
    </footer>
    @stack('scripts')
</body>

</html>
</body>

</html>