<x-main-layout>
        <!-- Title Section -->
        <section class="bg-gray-50 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-left">
                    <!-- Back Button, Title and Subtitle -->
                    <div class="flex items-center mb-1">
                        <a href="/" class="flex items-center justify-center w-10 h-10 bg-[#FF6B35] hover:bg-[#E55A2B] text-white rounded-full transition-all duration-200 mr-4 shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                        </a>
                        <h1 class="text-lg md:text-xl lg:text-2xl font-bold leading-tight text-gray-900">
                            IOT/OT
                        </h1>
                    </div>
                    
                    <!-- Subtitle -->
                    <h2 class="text-sm md:text-base font-normal text-gray-600 leading-relaxed">
                        Solutions connectées et technologies opérationnelles pour l'industrie
                    </h2>
                </div>
            </div>
        </section>

        <!-- Expertise & Pilotage Section 1 -->
        <section class="py-16 bg-blue-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6">
                        <!-- Main Heading -->
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-black leading-tight text-gray-900">
                            Industrie connectée<br><span class="text-[#FF6B35]">et intelligente</span>
                        </h2>
                        
                        <!-- Description -->
                        <p class="text-lg text-gray-600 leading-relaxed font-light">
                            Nous transformons votre industrie avec des solutions IoT/OT avancées, connectant vos équipements et optimisant vos processus opérationnels pour une efficacité maximale.
                        </p>
                        
                        <!-- CTA Button -->
                        <div class="pt-4">
                            <a href="#contact" class="orange-gradient text-white px-6 py-3 rounded-lg font-semibold text-base hover:shadow-xl transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                                Planifier un entretien
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right Content - Image -->
                    <div class="relative">
                        <img src="{{ asset('images/cap.png') }}" 
                             alt="Solutions IoT/OT industrielles" 
                             class="w-full h-auto rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Cards Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Card 1: IoT Industriel -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                IoT Industriel<br><span class="text-[#FF6B35]">et Connectivité</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="IoT industriel" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Conception et déploiement de solutions IoT pour connecter vos équipements industriels et collecter des données en temps réel.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Capteurs et dispositifs IoT</strong><br>
                                        <span class="text-xs text-gray-600">Installation et configuration de capteurs intelligents.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Connectivité industrielle</strong><br>
                                        <span class="text-xs text-gray-600">Réseaux LoRaWAN, 4G/5G, WiFi industriel.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Plateformes IoT</strong><br>
                                        <span class="text-xs text-gray-600">Développement de dashboards et applications.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2: Technologies Opérationnelles -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                Technologies Opérationnelles<br><span class="text-[#FF6B35]">(OT)</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="Technologies opérationnelles" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Intégration et optimisation de vos systèmes de contrôle industriels, SCADA et automates pour une gestion opérationnelle efficace.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Systèmes SCADA</strong><br>
                                        <span class="text-xs text-gray-600">Supervision et contrôle d'acquisition de données.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Automates industriels</strong><br>
                                        <span class="text-xs text-gray-600">Programmation et maintenance de PLC.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Intégration IT/OT</strong><br>
                                        <span class="text-xs text-gray-600">Convergence des systèmes informatiques et opérationnels.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Maintenance prédictive</strong><br>
                                        <span class="text-xs text-gray-600">Analyse prédictive pour optimiser la maintenance.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gage de Qualité Section -->
        <section class="py-16 w-full relative overflow-hidden">
            <div class="max-w-7xl mx-auto relative">
                <!-- Background Image -->
                <div class="absolute inset-0 rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/cap.png') }}" 
                         alt="Équipe IoT/OT en action" 
                         class="w-full h-full object-cover filter blur-sm">
                </div>
                
                <!-- Background with gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a] via-[#0f172a]/90 via-[#0f172a]/60 to-transparent rounded-2xl"></div>
            
            <div class="w-full px-8 sm:px-12 lg:px-16 relative z-10 py-12">
                <div class="max-w-4xl">
                    <!-- Main Title -->
                    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                        Expertise IoT/OT certifiée à votre service
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-200 leading-relaxed font-light mb-8">
                        Notre équipe d'ingénieurs spécialisés en IoT/OT vous accompagne dans la transformation numérique de votre industrie avec des solutions innovantes et fiables.
                    </p>
                    
                    <!-- Bullet Points -->
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Ingénieurs certifiés IoT et automation</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Technologies industrielles de pointe</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Support technique spécialisé</span>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section id="contact" class="py-8 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                    Discutons de votre <span class="text-[#FF6B35]">transformation IoT/OT</span>
                </h2>
                <p class="text-base text-gray-600 mb-6 font-light">
                    Notre expertise en IoT/OT est le moteur de votre industrie 4.0.
                </p>
                <a href="/contact" class="bg-[#FF6B35] text-white px-8 py-3 rounded-lg font-semibold text-base hover:shadow-lg transition-all duration-300 inline-flex items-center">
                    Demander une consultation
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </section>

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
</x-main-layout>

