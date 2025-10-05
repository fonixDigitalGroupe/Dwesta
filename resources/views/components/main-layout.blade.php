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
                    <a href="#services" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Services</a>
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
                <a href="#services" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003]">Services</a>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-8">
                <!-- Company Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-lg flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">D</span>
                        </div>
<div>
                            <span class="text-2xl font-bold text-white">DWESTA</span>
                            <span class="text-2xl font-bold text-[#FF6B35] ml-2">Solutions</span>
                        </div>
                    </div>
                    <p class="text-gray-300 text-base leading-relaxed mb-6">
                        L'énergie de l'Afrique au service d'un avenir connecté,<br>ambitieux et responsable.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-9 h-9 bg-gray-700 hover:bg-[#FF6B35] rounded-lg flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-700 hover:bg-[#FF6B35] rounded-lg flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-700 hover:bg-[#FF6B35] rounded-lg flex items-center justify-center transition-all duration-300">
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
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Bangui, RCA</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">France</a></li>
                        <li><a href="mailto:contact@dwesta.com" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">contact@dwesta.com</a></li>
                        <li><a href="tel:+236XXXXXXXX" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">+236 XX XX XX XX</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left">
                        <p class="text-gray-400 text-sm mb-1">
                            © {{ date('Y') }} DWESTA Solutions. Tous droits réservés.
                        </p>
                        <p class="text-gray-500 text-xs">
                            Entreprise de transformation numérique
                        </p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a href="#" class="text-gray-400 hover:text-[#FF6B35] transition-colors duration-300 text-sm">Mentions légales</a>
                        <a href="#" class="text-gray-400 hover:text-[#FF6B35] transition-colors duration-300 text-sm">Politique de confidentialité</a>
                        <a href="#" class="text-gray-400 hover:text-[#FF6B35] transition-colors duration-300 text-sm">CGV</a>
                    </div>
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