<x-main-layout>
        <!-- Title Section -->
        <section class="bg-gray-50 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-left">
                    <!-- Back Button and Title -->
                    <div class="flex items-center mb-1">
                        <a href="/" class="flex items-center justify-center w-10 h-10 bg-[#FF6B35] hover:bg-[#E55A2B] text-white rounded-full transition-all duration-200 mr-4 shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                        </a>
                        <h1 class="text-lg md:text-xl lg:text-2xl font-bold leading-tight text-gray-900">
                            Conseils Stratégiques
                        </h1>
                    </div>
                    
                    <!-- Subtitle -->
                    <h2 class="text-sm md:text-base font-normal text-gray-600 leading-relaxed">
                        Nous vous accompagnons pour mener à bien vos objectifs
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
                            Du concept à la réalisation,<br><span class="text-[#FF6B35]">un pilotage d'expert</span>
                        </h2>
                        
                        <!-- Description -->
                        <p class="text-lg text-gray-600 leading-relaxed font-light">
                            Nos services de conseil sont conçus pour structurer, piloter et réussir vos projets les plus ambitieux, en alignant la technologie avec votre stratégie d'entreprise.
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
                             alt="Équipe de conseil en transformation numérique" 
                             class="w-full h-auto rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Cards Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Card 1: AMOA/AMOE -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                Assistance à Maîtrise d'Ouvrage / d'Œuvre<br><span class="text-[#FF6B35]">(AMOA/AMOE)</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="Assistance à Maîtrise d'Ouvrage" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Nous vous apportons le support méthodologique et technique nécessaire pour garantir le succès de vos projets, de la définition des besoins à la mise en production.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Rédaction de cahier des charges</strong><br>
                                        <span class="text-xs text-gray-600">Définition claire et précise de vos besoins et exigences.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Gestion de projet de A à Z</strong><br>
                                        <span class="text-xs text-gray-600">Lancement, planification, exécution, pilotage (KPIs), contrôle et clôture.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Mise en œuvre et monitoring</strong><br>
                                        <span class="text-xs text-gray-600">Suivi rigoureux pour assurer l'atteinte des objectifs.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2: DSI/RSI -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                DSI et RSI de transition<br><span class="text-[#FF6B35]">Strategic Leadership</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="DSI et RSI de transition" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Nous assurons le leadership technologique de votre entreprise pour des périodes de transition, en apportant une expertise stratégique et opérationnelle immédiate.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Aide et conseils stratégiques</strong><br>
                                        <span class="text-xs text-gray-600">Pour le pilotage des SI.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Rédaction et mise en place du schéma directeur</strong><br>
                                        <span class="text-xs text-gray-600">Du SI.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Suivi budgétaire du SI</strong>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Gestion des fournisseurs</strong><br>
                                        <span class="text-xs text-gray-600">Internes et externes du SI.</span>
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
                         alt="Équipe de projet en action" 
                         class="w-full h-full object-cover filter blur-sm">
                </div>
                
                <!-- Background with gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a] via-[#0f172a]/90 via-[#0f172a]/60 to-transparent rounded-2xl"></div>
            
            <div class="w-full px-8 sm:px-12 lg:px-16 relative z-10 py-12">
                <div class="max-w-4xl">
                    <!-- Main Title -->
                    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                        Un Chef de Projet Certifié PMP® à votre service
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-200 leading-relaxed font-light mb-8">
                        Notre équipe est renforcée par un chef de projet certifié Project Management Professional (PMP)®. Cette certification internationalement reconnue garantit l'application des meilleures pratiques et d'une méthodologie rigoureuse pour une gestion de projet efficace, transparente et orientée résultats.
                    </p>
                    
                    <!-- Bullet Points -->
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Pilotage expert des coûts, délais et périmètre</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Communication fluide et gestion des parties prenantes</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Maîtrise des risques et assurance qualité</span>
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
                    Discutons de votre prochain <span class="text-[#FF6B35]">projet stratégique</span>
                </h2>
                <p class="text-base text-gray-600 mb-6 font-light">
                    Notre expertise en conseil et gestion de projet est le levier de votre succès.
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