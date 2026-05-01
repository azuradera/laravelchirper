<!DOCTYPE html>
<html lang="en" data-theme="corporate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' | Chirper' : 'Chirper' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net/" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col font-sans bg-gradient-to-br from-purple-200 via-pink-200 to-blue-200">

<!-- NAVBAR -->
<nav class="navbar bg-base-100/80 backdrop-blur shadow-md px-6 sticky top-0 z-50">
    <div class="flex-1">
        <a href="/" class="text-xl font-bold tracking-wide">
            🐦 Chirper
        </a>
    </div>

    <div class="flex-none gap-2">
        <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
        <a href="#" class="btn btn-primary btn-sm rounded-full px-5 shadow">
            Sign Up
        </a>
    </div>
</nav>

<!-- MAIN CONTENT -->
<main class="flex-1 container mx-auto px-4 py-10">
    <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-2xl p-6">
        {{ $slot }}
    </div>
</main>

<!-- FOOTER -->
<footer class="footer footer-center p-6 bg-base-300 text-base-content text-sm border-t">
    <div>
        <p class="font-medium">
            © {{ date('Y') }} Chirper. Built with Laravel ❤️
        </p>
        <p class="opacity-60 text-xs">
            by Bayu Samudera (230170116)
        </p>
    </div>
</footer>

</body>
</html>