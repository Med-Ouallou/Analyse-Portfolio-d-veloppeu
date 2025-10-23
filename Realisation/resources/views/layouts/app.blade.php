<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio - Mohamed Ouallou')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-blue-600">MD</div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="transition-colors hover:text-blue-600 {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="transition-colors hover:text-blue-600 {{ request()->routeIs('about') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">About</a>
                    <a href="{{ route('projects') }}" class="transition-colors hover:text-blue-600 {{ request()->routeIs('projects') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">Projects</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="min-h-screen">
        @yield('content')
    </div>

    <footer class="text-center py-6 bg-white border-t">
        <p class="text-gray-500 text-sm">© 2025 Mohamed Ouallou. All rights reserved.</p>
    </footer>
</body>
</html>
