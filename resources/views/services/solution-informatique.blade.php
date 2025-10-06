<x-main-layout>
        <!-- Title Section -->
        <section class="bg-gray-50 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-left">
                    <!-- Back Button and Title -->
                    <div class="flex items-center mb-1">
                        <a href="/#services" class="flex items-center justify-center w-10 h-10 bg-[#FF6B35] hover:bg-[#E55A2B] text-white rounded-full transition-all duration-200 mr-4 shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                        </a>
                        <h1 class="text-lg md:text-xl lg:text-2xl font-bold leading-tight text-gray-900">
                            Infrastructure IT
                        </h1>
                    </div>
                    
                    <!-- Subtitle -->
                    <h2 class="text-sm md:text-base font-normal text-gray-600 leading-relaxed">
                        Infogérance, maintenance, hotline et ingénierie de déploiement de réseau LAN/WAN d'entreprise
                    </h2>
                </div>
            </div>
        </section>

        <!-- Expertise & Pilotage Section 1 -->
        <section class="py-8 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <!-- Left Content -->
                    <div class="space-y-4">
                        <!-- Main Heading -->
                        <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900">
                            Infogérance et maintenance<br><span class="text-[#FF6B35]">de vos systèmes</span>
                        </h2>
                        
                        <!-- Description -->
                        <p class="text-base text-gray-600 leading-relaxed">
                            Nous assurons la gestion complète de votre infrastructure informatique avec des services d'infogérance, de maintenance préventive et de support technique 24/7.
                        </p>
                    </div>
                    
                    <!-- Right Content - Image -->
                    <div class="relative h-64">
                        <img src="{{ asset('images/cap.png') }}" 
                             alt="Infrastructure informatique et réseaux" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Cards Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Card 1: Infogérance -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                Infogérance et Maintenance<br><span class="text-[#FF6B35]">24/7</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="Infogérance et maintenance" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Surveillance proactive de vos systèmes, maintenance préventive et corrective, avec un support technique disponible 24h/24 et 7j/7.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Surveillance proactive</strong><br>
                                        <span class="text-xs text-gray-600">Monitoring continu de vos systèmes et alertes automatiques.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Maintenance préventive</strong><br>
                                        <span class="text-xs text-gray-600">Mises à jour, sauvegardes et optimisations régulières.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Support technique 24/7</strong><br>
                                        <span class="text-xs text-gray-600">Hotline disponible en permanence pour vos urgences.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2: Ingénierie Réseau -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                Ingénierie Réseau<br><span class="text-[#FF6B35]">LAN/WAN</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="Ingénierie réseau LAN/WAN" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Conception, déploiement et optimisation de vos réseaux d'entreprise LAN/WAN pour garantir performance, sécurité et évolutivité.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Conception réseau</strong><br>
                                        <span class="text-xs text-gray-600">Architecture sur mesure adaptée à vos besoins.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Déploiement LAN/WAN</strong><br>
                                        <span class="text-xs text-gray-600">Installation et configuration de vos équipements réseau.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Optimisation et sécurité</strong><br>
                                        <span class="text-xs text-gray-600">Performance maximale et protection de vos données.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Formation équipes</strong><br>
                                        <span class="text-xs text-gray-600">Accompagnement et formation de vos équipes techniques.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gage de Qualité Section -->
        <section class="py-20 w-full relative overflow-hidden">
            <div class="max-w-6xl mx-auto relative">
                <!-- Background Image -->
                <div class="absolute inset-0 rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/cap.png') }}" 
                         alt="Équipe technique en action" 
                         class="w-full h-[500px] object-cover object-right">
                </div>
                
                <!-- Background with gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a] via-[#0f172a]/90 via-[#0f172a]/60 to-transparent rounded-2xl"></div>
            
            <div class="w-full px-6 sm:px-8 lg:px-12 relative z-10 py-16">
                <div class="max-w-4xl">
                    <!-- Main Title -->
                    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                        Expertise technique certifiée à votre service
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-200 leading-relaxed font-light mb-8">
                        Notre équipe d'ingénieurs certifiés vous garantit une expertise technique de pointe pour la gestion et l'optimisation de votre infrastructure informatique. Nous mettons notre savoir-faire au service de votre performance.
                    </p>
                    
                    <!-- Bullet Points -->
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Ingénieurs certifiés et expérimentés</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Technologies de pointe et bonnes pratiques</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Support réactif et personnalisé</span>
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
                    Discutons de votre <span class="text-[#FF6B35]">infrastructure informatique</span>
                </h2>
                <p class="text-base text-gray-600 mb-6 font-light">
                    Notre expertise en infogérance et ingénierie réseau est le levier de votre performance technique.
                </p>
                <a href="/contact" class="bg-[#FF6B35] text-white px-8 py-3 rounded-lg font-semibold text-base hover:shadow-lg transition-all duration-300 inline-flex items-center">
                    Demander une consultation
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </section>
</x-main-layout>
