<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1>Minha Aplicação</h1>
        </div>
    </header>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-3">
        <div class="container">
            <p>&copy; {{ date('Y') }} Minha Aplicação. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
