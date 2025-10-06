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
                            IoT & OT
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
        <section class="py-8 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <!-- Left Content -->
                    <div class="space-y-4">
                        <!-- Main Heading -->
                        <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900">
                            Industrie connectée<br><span class="text-[#FF6B35]">et intelligente</span>
                        </h2>
                        
                        <!-- Description -->
                        <p class="text-base text-gray-600 leading-relaxed">
                            Nous transformons votre industrie avec des solutions IoT/OT avancées, connectant vos équipements et optimisant vos processus opérationnels pour une efficacité maximale.
                        </p>
                    </div>
                    
                    <!-- Right Content - Image -->
                    <div class="relative h-64">
                        <img src="{{ asset('images/cap.png') }}" 
                             alt="Solutions IoT/OT industrielles" 
                             class="w-full h-full object-cover">
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
        <section class="py-20 w-full relative overflow-hidden">
            <div class="max-w-6xl mx-auto relative">
                <!-- Background Image -->
                <div class="absolute inset-0 rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/cap.png') }}" 
                         alt="Équipe IoT/OT en action" 
                         class="w-full h-[500px] object-cover object-right">
                </div>
                
                <!-- Background with gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a] via-[#0f172a]/90 via-[#0f172a]/60 to-transparent rounded-2xl"></div>
            
            <div class="w-full px-6 sm:px-8 lg:px-12 relative z-10 py-16">
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
</x-main-layout>



