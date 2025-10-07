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

    <!-- Preload critical images -->
    @if(request()->is('cybersecurite'))
        <link rel="preload" as="image" href="{{ asset('images/cyberaccueil.jpg') }}">
    @endif

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('images/logodwesta.png') }}" 
                             alt="Dwesta Solutions" 
                             class="h-8 w-auto">
                        <span class="text-xl font-bold text-[#2c2c2c]">Dwesta</span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('home') }}" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Accueil</a>
                    <a href="{{ route('home') }}#about" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">À propos</a>
                    <a href="{{ route('home') }}#services" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Services</a>
                    <a href="{{ route('home') }}#fournisseur" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Partenariats</a>
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
                <a href="{{ route('home') }}#about" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">À propos</a>
                <a href="{{ route('home') }}#services" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Services</a>
                <a href="{{ route('home') }}#fournisseur" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Partenariats</a>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-8">
                <!-- Company Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/logodwesta.png') }}" 
                             alt="Dwesta Solutions" 
                             class="h-12 w-auto mr-4">
<div>
                            <span class="text-2xl font-bold text-white">DWESTA</span>
                        </div>
                    </div>
                    <p class="text-gray-300 text-base leading-relaxed mb-6">
                        L'énergie de l'Afrique au service d'un avenir connecté,<br>ambitieux et responsable.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/share/1APrXSjqHi/" target="_blank" class="w-9 h-9 bg-gray-700 hover:bg-[#1877F2] rounded-lg flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/dwesta/" target="_blank" class="w-9 h-9 bg-gray-700 hover:bg-[#0077B5] rounded-lg flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-6 text-white">Liens rapides</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Accueil</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">À propos</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Services</a></li>
                        <li><a href="{{ route('partenariats') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Partenariats</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-6 text-white">Contact</h3>
                    <ul class="space-y-3">
                        <li><a href="mailto:contact@dwesta.com" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">contact@dwesta.com</a></li>
                        <li><a href="tel:+23674019849" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">+236 74 01 98 49</a></li>
                        <li><span class="text-gray-300 text-sm">Rond-Point Benz-Vi, Bangui, RCA</span></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 pt-8">
                <div class="text-center">
                        <p class="text-gray-400 text-sm mb-1">
                        © 2025 DWESTA SAS. Tous droits réservés.
                    </p>
                    <p class="text-gray-500 text-xs mb-1">
                        NIU: 2362024M15634P | RCCM: CA/BG/2024B2144
                        </p>
                        <p class="text-gray-500 text-xs">
                            Entreprise de transformation numérique
                        </p>
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