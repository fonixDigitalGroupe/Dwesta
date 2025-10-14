<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Dwesta - Solutions Digitales & Cybersécurité en Afrique' }}</title>
    <meta name="description" content="{{ $description ?? 'DWESTA SAS est une entreprise de services numériques créée par deux ingénieurs africains. Plus de 10 ans d\'expérience en cybersécurité, développement web & mobile, IoT/OT et conseil digital.' }}">
    
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Dwesta, cybersécurité Afrique, développement web Afrique, IoT OT, conseil digital, services numériques, solutions digitales, ingénieurs africains, Bangui, RCA">
    <meta name="author" content="Dwesta SAS">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logodwesta.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logodwesta.png') }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Dwesta - Solutions Digitales & Cybersécurité' }}">
    <meta property="og:description" content="{{ $description ?? 'DWESTA SAS - Services numériques en Afrique : cybersécurité, développement, IoT/OT' }}">
    <meta property="og:image" content="{{ asset('images/logodwesta.png') }}">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Dwesta">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title ?? 'Dwesta - Solutions Digitales & Cybersécurité' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Services numériques en Afrique' }}">
    <meta name="twitter:image" content="{{ asset('images/logodwesta.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- SCRIPT ULTRA-PREMIER POUR DETRUIRE LE BOUTON BLEU -->
    <script>
        // EXECUTION IMMEDIATE - AVANT TOUS LES AUTRES SCRIPTS
        (function() {
            function KILL_BLUE_BUTTON() {
                // Détruire TOUS les éléments bleus (EXCLURE COOKIE BANNER)
                const allElements = document.querySelectorAll('*');
                allElements.forEach(el => {
                    // EXCLURE LE COOKIE BANNER
                    if (el.closest('.silktide-cookie-banner') || 
                        el.closest('.silktide-cookie-preferences') ||
                        el.classList.contains('silktide-cookie-banner') ||
                        el.classList.contains('silktide-cookie-preferences') ||
                        el.id.includes('silktide') ||
                        el.className.includes('silktide')) {
                        return; // Ne pas détruire le cookie banner
                    }
                    
                    const style = window.getComputedStyle(el);
                    if (style.position === 'fixed' && 
                        (style.backgroundColor.includes('blue') || 
                         style.backgroundColor.includes('#007bff') ||
                         style.backgroundColor.includes('#0066cc') ||
                         style.backgroundColor.includes('rgb(0, 123, 255)') ||
                         style.backgroundColor.includes('rgb(0, 102, 204)'))) {
                        el.remove();
                    }
                });
            }
            
            // Exécution immédiate
            KILL_BLUE_BUTTON();
            
            // Exécution continue
            setInterval(KILL_BLUE_BUTTON, 50);
            setInterval(KILL_BLUE_BUTTON, 25);
            setInterval(KILL_BLUE_BUTTON, 10);
        })();
    </script>
    
    <!-- CSS NUCLEAIRE POUR DETRUIRE LE BOUTON BLEU -->
    <style>
        /* DESTRUCTION TOTALE DU BOUTON BLEU - GLOBAL */
        button[style*="background-color: blue"],
        button[style*="background: blue"],
        button[style*="background-color: #007bff"],
        button[style*="background: #007bff"],
        button[style*="background-color: #0066cc"],
        button[style*="background: #0066cc"],
        button[style*="background-color: rgb(0, 123, 255)"],
        button[style*="background-color: rgb(0, 102, 204)"],
        button[style*="background-color: #0056b3"],
        button[style*="background-color: #004085"],
        /* Boutons circulaires */
        button[style*="border-radius: 50%"],
        button[style*="border-radius: 50px"],
        button[style*="border-radius: 25px"],
        button[style*="border-radius: 30px"],
        button[style*="border-radius: 40px"],
        /* Éléments en position fixe */
        *[style*="position: fixed"],
        button[style*="position: fixed"],
        a[style*="position: fixed"],
        div[style*="position: fixed"],
        span[style*="position: fixed"],
        /* Positionnement bas-droit */
        *[style*="bottom: 20px"][style*="right: 20px"],
        *[style*="bottom: 30px"][style*="right: 30px"],
        *[style*="bottom: 40px"][style*="right: 40px"],
        *[style*="bottom: 50px"][style*="right: 50px"],
        /* Éléments bleus */
        *[style*="background-color: blue"],
        *[style*="background: blue"],
        *[style*="background-color: #007bff"],
        *[style*="background: #007bff"],
        *[style*="background-color: #0066cc"],
        *[style*="background: #0066cc"],
        /* Sélecteurs back-to-top */
        [id*="back-to-top"],
        [class*="back-to-top"],
        [id*="scroll-top"],
        [class*="scroll-top"],
        .scroll-to-top,
        .back-to-top,
        #scroll-to-top,
        #back-to-top,
        /* Sélecteurs de plugins */
        .wp-back-to-top,
        .back-to-top-button,
        .scroll-to-top-button,
        .top-button,
        .scroll-up,
        .go-to-top {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
            z-index: -9999 !important;
            position: absolute !important;
            left: -9999px !important;
            top: -9999px !important;
        }
        
        /* MASQUAGE EXTRÊME - TOUS LES BOUTONS EN POSITION FIXE */
        *[style*="position: fixed"][style*="bottom"],
        *[style*="position: fixed"][style*="right"],
        button[style*="position: fixed"][style*="bottom"],
        a[style*="position: fixed"][style*="bottom"],
        div[style*="position: fixed"][style*="bottom"],
        span[style*="position: fixed"][style*="bottom"] {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
            z-index: -9999 !important;
        }
    </style>

    <!-- Preload critical images -->
    @if(request()->is('cybersecurite'))
        <link rel="preload" as="image" href="{{ asset('images/cyberaccueil.jpg') }}">
    @endif
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Dwesta',
        'legalName' => 'DWESTA SAS',
        'url' => 'https://www.dwesta.com',
        'logo' => asset('images/logodwesta.png'),
        'description' => 'Entreprise de services numériques spécialisée en cybersécurité, développement web & mobile, IoT/OT et conseil digital en Afrique',
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Bangui',
            'addressCountry' => 'RCA'
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+236-74-01-98-49',
            'contactType' => 'customer service',
            'email' => 'contact@dwesta.com',
            'availableLanguage' => ['fr', 'en']
        ],
        'sameAs' => [
            'https://calendly.com/contact-dwesta'
        ],
        'areaServed' => [
            '@type' => 'Place',
            'name' => 'Afrique'
        ],
        'knowsAbout' => ['Cybersécurité', 'Développement Web', 'Développement Mobile', 'IoT', 'OT', 'Conseil Digital', 'Infrastructure IT']
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Preloader Styles -->
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        
        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid #f3f4f6;
            border-top: 4px solid #F53003;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    
    <!-- Cookie Banner -->
    <link rel="stylesheet" id="silktide-consent-manager-css" href="{{ asset('cookie-banner/silktide-consent-manager.css') }}">
    <script src="{{ asset('cookie-banner/silktide-consent-manager.js') }}"></script>
    <script>
    silktideCookieBannerManager.updateCookieBannerConfig({
      background: {
        showBackground: false
      },
      cookieIcon: {
        position: "bottomLeft"
      },
      cookieTypes: [
        {
          id: "n_cessaire",
          name: "Nécessaire",
          description: "<p>Ces cookies sont nécessaires au bon fonctionnement du site internet et ne peuvent pas être désactivés. Ils permettent notamment de gérer la connexion et de mémoriser vos préférences de confidentialité.</p>",
          required: true,
          onAccept: function() {
            console.log('Add logic for the required Nécessaire here');
          }
        },
        {
          id: "analytics",
          name: "Analytics",
          description: "<p>Ces cookies nous aident à améliorer le site en suivant les pages les plus populaires et la façon dont les visiteurs naviguent sur le site.</p>",
          required: false,
          onAccept: function() {
            console.log('Analytics cookies accepted');
            if (typeof gtag !== 'undefined') {
              gtag('consent', 'update', {
                analytics_storage: 'granted',
              });
            }
            if (typeof dataLayer !== 'undefined') {
              dataLayer.push({
                'event': 'consent_accepted_analytics',
              });
            }
          },
          onReject: function() {
            console.log('Analytics cookies rejected');
            if (typeof gtag !== 'undefined') {
              gtag('consent', 'update', {
                analytics_storage: 'denied',
              });
            }
          }
        },
        {
          id: "publicit",
          name: "Publicité",
          description: "<p>Ces cookies offrent des fonctionnalités supplémentaires et une personnalisation destinée à améliorer votre expérience. Ils peuvent être déposés par nous ou par nos partenaires dont nous utilisons les services. </p>",
          required: false,
          onAccept: function() {
            console.log('Publicité cookies accepted');
            if (typeof gtag !== 'undefined') {
              gtag('consent', 'update', {
                ad_storage: 'granted',
                ad_user_data: 'granted',
                ad_personalization: 'granted',
              });
            }
            if (typeof dataLayer !== 'undefined') {
              dataLayer.push({
                'event': 'consent_accepted_publicit',
              });
            }
          },
          onReject: function() {
            console.log('Publicité cookies rejected');
            if (typeof gtag !== 'undefined') {
              gtag('consent', 'update', {
                ad_storage: 'denied',
                ad_user_data: 'denied',
                ad_personalization: 'denied',
              });
            }
          }
        }
      ],
      text: {
        banner: {
          description: "<p>Ce site utilise des cookies pour améliorer votre expérience, mesurer l'audience et personnaliser le contenu.&nbsp;&nbsp;</p><p>Vous pouvez accepter, refuser ou personnaliser vos choix.</p>",
          acceptAllButtonText: "Accepter",
          acceptAllButtonAccessibleLabel: "Accepter",
          rejectNonEssentialButtonText: "Refuser",
          rejectNonEssentialButtonAccessibleLabel: "Refuser",
          preferencesButtonText: "Préférences",
          preferencesButtonAccessibleLabel: "Préférences"
        },
        preferences: {
          title: "Personnalisez vos préférences cookie",
          description: "<p>Nous respectons votre droit à la vie privée. Vous pouvez choisir de ne pas autoriser certains types de cookies. Vos préférences en matière de cookies s'appliqueront sur l'ensemble de notre site.</p>",
          creditLinkText: "Obtenez cette bannière gratuitement",
          creditLinkAccessibleLabel: "Obtenez cette bannière gratuitement"
        }
      },
      position: {
        banner: "bottomLeft"
      },
      onAcceptAll: function() {
        console.log('All cookies accepted');
        // Logique pour accepter tous les cookies
      },
      onRejectAll: function() {
        console.log('All non-essential cookies rejected');
        // Logique pour refuser tous les cookies non-essentiels
      }
    });
    </script>
</head>
<body class="font-sans antialiased bg-white">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    
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
                    <a href="{{ route('home') }}#contact" class="text-[#2c2c2c] hover:text-[#F53003] px-3 py-2 text-base font-medium transition-colors">Contact</a>
                    <a href="https://calendly.com/contact-dwesta/rendez-vous-de-45-minutes" target="_blank" class="bg-[#F53003] text-white px-4 py-2 rounded-lg text-base font-medium hover:bg-[#e02d03] transition-colors">Prendre rendez-vous</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button onclick="toggleMenu()" type="button" class="text-[#2c2c2c] hover:text-[#F53003] focus:outline-none focus:text-[#F53003] p-2">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200 shadow-lg absolute top-full left-0 right-0 z-50" style="display: none;">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003] hover:bg-gray-50 rounded-md transition-colors">Accueil</a>
                <a href="{{ route('home') }}#about" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003] hover:bg-gray-50 rounded-md transition-colors">À propos</a>
                <a href="{{ route('home') }}#services" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003] hover:bg-gray-50 rounded-md transition-colors">Services</a>
                <a href="{{ route('home') }}#fournisseur" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003] hover:bg-gray-50 rounded-md transition-colors">Partenariats</a>
                <a href="{{ route('home') }}#contact" class="block px-3 py-2 text-[#2c2c2c] hover:text-[#F53003] hover:bg-gray-50 rounded-md transition-colors">Contact</a>
                <a href="https://calendly.com/contact-dwesta/rendez-vous-de-45-minutes" target="_blank" class="block px-3 py-2 bg-[#F53003] text-white rounded-lg mx-2 text-center hover:bg-[#e02d00] transition-colors">Prendre rendez-vous</a>
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
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
                        L'énergie de l'Afrique au service d'un avenir connecté, ambitieux et responsable.
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

                <!-- Legal -->
                <div class="md:col-span-1">
                    <h3 class="text-lg font-semibold mb-6 text-white">Informations légales</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('mentions-legales') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Mentions légales</a></li>
                        <li><a href="{{ route('cgu') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Conditions générales d'utilisation</a></li>
                        <li><a href="{{ route('politique-confidentialite') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Politique de confidentialité</a></li>
                        <li><a href="{{ route('politique-cookies') }}" class="text-gray-300 hover:text-white transition-colors duration-300 text-sm">Politique de cookies</a></li>
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
                        <p class="text-gray-400 text-sm mb-2">
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
        // Preloader - Hide when page is fully loaded
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                // Petit délai pour une meilleure UX
                setTimeout(() => {
                    preloader.classList.add('hidden');
                    // Supprimer complètement du DOM après la transition
                    setTimeout(() => {
                        preloader.remove();
                    }, 500);
                }, 300);
            }
        });
        
        // Simple global function for mobile menu
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu) {
                if (menu.style.display === 'none' || menu.style.display === '') {
                    menu.style.display = 'block';
                    menu.classList.remove('hidden');
                    console.log('Menu shown!');
                } else {
                    menu.style.display = 'none';
                    menu.classList.add('hidden');
                    console.log('Menu hidden!');
                }
            } else {
                console.error('Menu not found!');
            }
        }
        
        // Close menu function
        function closeMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu) {
                menu.style.display = 'none';
                menu.classList.add('hidden');
            }
        }
        
        // Initialize when page loads
        window.onload = function() {
            console.log('Page loaded, mobile menu ready');
            
            // Close menu when clicking on links
            const menuLinks = document.querySelectorAll('#mobile-menu a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    closeMenu();
                });
            });
        };
    </script>
    
    <!-- SCRIPT NUCLEAIRE GLOBAL POUR DETRUIRE LE BOUTON BLEU -->
    <script>
        // EXECUTION IMMEDIATE - DESTRUCTION TOTALE DU BOUTON BLEU
        (function() {
            function DESTROY_BLUE_BUTTON() {
                console.log('🔥 DESTROYING BLUE BUTTON...');
                
                // 1. Supprimer par sélecteurs CSS (EXCLURE LE COOKIE BANNER)
                const selectors = [
                    'button[style*="background-color: blue"]',
                    'button[style*="background: blue"]',
                    'button[style*="background-color: #007bff"]',
                    'button[style*="background: #007bff"]',
                    'button[style*="background-color: #0066cc"]',
                    'button[style*="background: #0066cc"]',
                    'button[style*="background-color: rgb(0, 123, 255)"]',
                    'button[style*="background-color: rgb(0, 102, 204)"]',
                    'button[style*="border-radius: 50%"]',
                    'button[style*="border-radius: 50px"]',
                    'button[style*="position: fixed"]',
                    'a[style*="position: fixed"]',
                    'div[style*="position: fixed"]',
                    'span[style*="position: fixed"]',
                    '*[style*="position: fixed"][style*="bottom"][style*="right"]',
                    '*[style*="position: fixed"][style*="bottom-right"]',
                    '[id*="back-to-top"]',
                    '[class*="back-to-top"]',
                    '[id*="scroll-top"]',
                    '[class*="scroll-top"]',
                    '.scroll-to-top',
                    '.back-to-top',
                    '#scroll-to-top',
                    '#back-to-top',
                    '.wp-back-to-top',
                    '.back-to-top-button',
                    '.scroll-to-top-button',
                    '.top-button',
                    '.scroll-up',
                    '.go-to-top'
                ];
                
                let destroyedCount = 0;
                selectors.forEach(selector => {
                    try {
                        const elements = document.querySelectorAll(selector);
                        elements.forEach(el => {
                            // EXCLURE LE COOKIE BANNER
                            if (el.closest('.silktide-cookie-banner') || 
                                el.closest('.silktide-cookie-preferences') ||
                                el.classList.contains('silktide-cookie-banner') ||
                                el.classList.contains('silktide-cookie-preferences') ||
                                el.id.includes('silktide') ||
                                el.className.includes('silktide')) {
                                return; // Ne pas détruire le cookie banner
                            }
                            
                            el.style.display = 'none !important';
                            el.style.visibility = 'hidden !important';
                            el.style.opacity = '0 !important';
                            el.style.pointerEvents = 'none !important';
                            el.style.zIndex = '-9999 !important';
                            el.style.position = 'absolute !important';
                            el.style.left = '-9999px !important';
                            el.style.top = '-9999px !important';
                            el.remove();
                            destroyedCount++;
                        });
                    } catch(e) {}
                });
                
                // 2. Supprimer TOUS les éléments en position fixe dans le coin bas-droit (EXCLURE COOKIE BANNER)
                const allElements = document.querySelectorAll('*');
                allElements.forEach(el => {
                    // EXCLURE LE COOKIE BANNER
                    if (el.closest('.silktide-cookie-banner') || 
                        el.closest('.silktide-cookie-preferences') ||
                        el.classList.contains('silktide-cookie-banner') ||
                        el.classList.contains('silktide-cookie-preferences') ||
                        el.id.includes('silktide') ||
                        el.className.includes('silktide')) {
                        return; // Ne pas détruire le cookie banner
                    }
                    
                    const style = window.getComputedStyle(el);
                    const rect = el.getBoundingClientRect();
                    
                    // Vérifier si c'est un bouton bleu circulaire en bas à droite
                    if (style.position === 'fixed' && 
                        rect.bottom <= 100 && 
                        rect.right <= 100 &&
                        (style.backgroundColor.includes('blue') || 
                         style.backgroundColor.includes('rgb(0, 123, 255)') ||
                         style.backgroundColor.includes('rgb(0, 102, 204)') ||
                         style.backgroundColor.includes('#007bff') ||
                         style.backgroundColor.includes('#0066cc') ||
                         style.backgroundColor.includes('#0056b3') ||
                         style.backgroundColor.includes('#004085') ||
                         el.tagName === 'BUTTON' ||
                         el.tagName === 'A' ||
                         el.tagName === 'DIV' ||
                         el.tagName === 'SPAN')) {
                        
                        // DESTRUCTION NUCLEAIRE
                        el.style.display = 'none !important';
                        el.style.visibility = 'hidden !important';
                        el.style.opacity = '0 !important';
                        el.style.pointerEvents = 'none !important';
                        el.style.zIndex = '-9999 !important';
                        el.style.position = 'absolute !important';
                        el.style.left = '-9999px !important';
                        el.style.top = '-9999px !important';
                        el.remove();
                        destroyedCount++;
                    }
                });
                
                // 3. Supprimer TOUS les éléments bleus (EXCLURE COOKIE BANNER)
                const blueElements = document.querySelectorAll('*');
                blueElements.forEach(el => {
                    // EXCLURE LE COOKIE BANNER
                    if (el.closest('.silktide-cookie-banner') || 
                        el.closest('.silktide-cookie-preferences') ||
                        el.classList.contains('silktide-cookie-banner') ||
                        el.classList.contains('silktide-cookie-preferences') ||
                        el.id.includes('silktide') ||
                        el.className.includes('silktide')) {
                        return; // Ne pas détruire le cookie banner
                    }
                    
                    const style = window.getComputedStyle(el);
                    if (style.backgroundColor.includes('blue') || 
                        style.backgroundColor.includes('rgb(0, 123, 255)') ||
                        style.backgroundColor.includes('rgb(0, 102, 204)') ||
                        style.backgroundColor.includes('#007bff') ||
                        style.backgroundColor.includes('#0066cc')) {
                        
                        el.style.display = 'none !important';
                        el.style.visibility = 'hidden !important';
                        el.style.opacity = '0 !important';
                        el.remove();
                        destroyedCount++;
                    }
                });
                
                if (destroyedCount > 0) {
                    console.log('💥 DESTROYED ' + destroyedCount + ' BLUE BUTTONS!');
                }
            }
            
            // EXECUTION IMMEDIATE
            DESTROY_BLUE_BUTTON();
            
            // EXECUTION QUAND DOM EST PRET
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', DESTROY_BLUE_BUTTON);
            } else {
                DESTROY_BLUE_BUTTON();
            }
            
            // EXECUTION SUR WINDOW LOAD
            window.addEventListener('load', DESTROY_BLUE_BUTTON);
            
            // EXECUTION SUR SCROLL
            window.addEventListener('scroll', DESTROY_BLUE_BUTTON);
            
            // EXECUTION MULTIPLE AVEC DELAIS
            setTimeout(DESTROY_BLUE_BUTTON, 50);
            setTimeout(DESTROY_BLUE_BUTTON, 100);
            setTimeout(DESTROY_BLUE_BUTTON, 200);
            setTimeout(DESTROY_BLUE_BUTTON, 500);
            setTimeout(DESTROY_BLUE_BUTTON, 1000);
            setTimeout(DESTROY_BLUE_BUTTON, 2000);
            setTimeout(DESTROY_BLUE_BUTTON, 5000);
            setTimeout(DESTROY_BLUE_BUTTON, 10000);
            
            // MUTATION OBSERVER POUR DETECTER LES ELEMENTS AJOUTES DYNAMIQUEMENT
            if (window.MutationObserver) {
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'childList') {
                            DESTROY_BLUE_BUTTON();
                        }
                    });
                });
                
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            }
            
            // SURVEILLANCE CONTINUE
            setInterval(DESTROY_BLUE_BUTTON, 1000);
            
            // SURVEILLANCE ULTRA-RAPIDE
            setInterval(DESTROY_BLUE_BUTTON, 100);
            
            // SURVEILLANCE EXTRÊME
            setInterval(DESTROY_BLUE_BUTTON, 50);
            
            // DESTRUCTION IMMEDIATE SUR CHAQUE INTERACTION
            document.addEventListener('click', DESTROY_BLUE_BUTTON);
            document.addEventListener('mousemove', DESTROY_BLUE_BUTTON);
            document.addEventListener('keydown', DESTROY_BLUE_BUTTON);
            
            // OVERRIDE DE TOUS LES SCRIPTS EXTERNES
            const originalCreateElement = document.createElement;
            document.createElement = function(tagName) {
                const element = originalCreateElement.call(this, tagName);
                if (tagName.toLowerCase() === 'button' || tagName.toLowerCase() === 'a' || tagName.toLowerCase() === 'div') {
                    setTimeout(() => {
                        const style = window.getComputedStyle(element);
                        if (style.position === 'fixed' || 
                            style.backgroundColor.includes('blue') || 
                            style.backgroundColor.includes('#007bff') ||
                            style.backgroundColor.includes('#0066cc')) {
                            element.remove();
                        }
                    }, 10);
                }
                return element;
            };
            
            // OVERRIDE DE appendChild
            const originalAppendChild = Node.prototype.appendChild;
            Node.prototype.appendChild = function(child) {
                const result = originalAppendChild.call(this, child);
                if (child.tagName === 'BUTTON' || child.tagName === 'A' || child.tagName === 'DIV') {
                    setTimeout(() => {
                        const style = window.getComputedStyle(child);
                        if (style.position === 'fixed' || 
                            style.backgroundColor.includes('blue') || 
                            style.backgroundColor.includes('#007bff') ||
                            style.backgroundColor.includes('#0066cc')) {
                            child.remove();
                        }
                    }, 10);
                }
                return result;
            };
        })();
    </script>
</body>
</html>