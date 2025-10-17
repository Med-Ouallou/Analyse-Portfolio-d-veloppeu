<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - {{ $developer['name'] ?? 'Developer' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <!-- Header -->
    <nav class="navbar navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Portfolio</span>
        </div>
    </nav>
    

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5 mb-3 text-muted">
        © {{ date('Y') }} {{ $developer['name'] ?? 'Developer' }} - Tous droits réservés
    </footer>

</body>
</html>
