<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Dwesta' }} - Solutions Digitales Innovantes</title>
    <meta name="description" content="{{ $description ?? 'Dewesta Solutions propose des solutions digitales innovantes pour transformer votre entreprise.' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                </div>
                
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('home') }}" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Accueil</a>
                    <a href="{{ route('about') }}" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">À propos</a>
                    <a href="{{ route('services') }}" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Services</a>
                    <a href="{{ route('partenariats') }}" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Partenariats</a>
                    <a href="{{ route('contact') }}" class="bg-[#F53003] text-white px-4 py-2 rounded-lg text-base font-medium hover:bg-[#e02d03] transition-colors">Contact</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-[#2c2c2c] hover:text-[#F53003] focus:outline-none focus:text-[#F53003]">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Accueil</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">À propos</a>
                <a href="{{ route('services') }}" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Services</a>
                <a href="{{ route('partenariats') }}" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Partenariats</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-[#1b1b18] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <div class="flex items-center justify-center mb-4">
                    <span class="text-2xl font-bold text-[#1b1b18]">DWESTA</span>
                    <span class="text-2xl font-bold text-[#1b1b18] ml-2">Solutions</span>
                </div>
            </div>
</div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>