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
                            Services informatiques
                        </h1>
                    </div>
                    
                    <!-- Subtitle -->
                    <h2 class="text-sm md:text-base font-normal text-gray-600 leading-relaxed">
                        Infrastructure et support technique pour votre entreprise
                    </h2>
                </div>
            </div>
        </section>

        <!-- Expertise & Pilotage Section 1 -->
        <section class="py-16 bg-orange-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <div class="space-y-6">
                        <!-- Main Heading -->
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight text-gray-900">
                        Une infrastructure informatique<br>
                        <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">fiable et performante</span>
                        </h2>
                        
                        <!-- Description -->
                    <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                        Dwesta prend en charge l'intégralité de vos besoins informatiques : infogérance, maintenance, support utilisateur et déploiement de réseaux d'entreprise.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 2: Déploiement Réseau LAN/WAN -->
        <section class="py-8 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Right Column - Image -->
                    <div class="relative order-1 lg:order-2">
                        <div class="relative h-[550px] rounded-lg overflow-hidden shadow-lg">
                            <img src="{{ asset('images/Réseau .png') }}" 
                                 alt="Déploiement réseau LAN/WAN" 
                                 loading="eager"
                                 decoding="sync"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Left Column - Content -->
                    <div class="space-y-8 order-2 lg:order-1">
                        <!-- Header Content -->
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold leading-tight text-black mb-4">
                                Déploiement Réseau <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">LAN/WAN</span>
                            </h2>
                            <p class="text-base text-gray-600 leading-relaxed mb-6">
                                Conception, déploiement et optimisation de vos infrastructures réseau pour une connectivité performante et sécurisée.
                            </p>
                        </div>
                    
                        <!-- Services Cards -->
                        <div class="space-y-6">
                        <!-- Card 1: Architecture réseau complète -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-gray-900 mb-1">Architecture réseau complète</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Étude, conception et mise en œuvre de l'infrastructure
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: Optimisation des performances -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-gray-900 mb-1">Optimisation des performances</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Analyse et amélioration continue du réseau
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3: Sécurisation avancée -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-gray-900 mb-1">Sécurisation avancée</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Protection et segmentation du trafic réseau
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Infogérance -->
        <section class="py-8 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-black mb-4">
                        Infogérance <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Complète</span>
                            </h2>
                            <p class="text-base text-gray-600 leading-relaxed">
                        Nous prenons en charge la gestion complète de votre infrastructure informatique, vous permettant de vous concentrer sur votre cœur de métier.
                            </p>
                        </div>
                        
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Left Column - Content -->
                    <div class="space-y-6">
                        <!-- Service 1: Surveillance 24h/24 et 7j/7 -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Surveillance 24h/24 et 7j/7</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Surveillance continue de vos systèmes et alertes proactives</p>
                                    </div>
                                    </div>
                        </div>
                        
                        <!-- Service 2: Système d'administration -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Système d'administration</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Gestion des serveurs, bases de données et applications</p>
                    </div>
                            </div>
                        </div>
                        
                        <!-- Service 3: Sécurité et sauvegarde -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Sécurité et sauvegarde</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Protection des données et plans de continuité</p>
                                </div>
                                    </div>
                                    </div>
                                    </div>
                    
                    <!-- Right Column - Image -->
                    <div class="relative">
                        <div class="relative h-[350px] rounded-lg overflow-hidden shadow-lg">
                            <img src="{{ asset('images/infogere.jpg') }}" 
                                 alt="Infogérance complète" 
                                 loading="eager"
                                 decoding="sync"
                                 class="w-full h-full object-cover">
                            <!-- Text Overlay -->
                            <div class="absolute bottom-8 left-8">
                                <h3 class="text-white text-2xl font-bold mb-2">Infrastructure maîtrisée</h3>
                                <p class="text-white text-base">Surveillance et optimisation continues</p>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Hotline et Maintenance -->
        <section class="py-8 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-black mb-4">
                        Hotline et <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Maintenance</span>
                            </h2>
                    <p class="text-base text-gray-600 leading-relaxed">
                        Notre équipe technique assure un support réactif et une maintenance préventive pour garantir la continuité de vos activités.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Left Column - Content -->
                    <div class="space-y-6">
                        
                        <!-- Card 1: Hotline dédiée -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-gray-900 mb-1">Hotline dédiée</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Support téléphonique et assistance à distance
                                    </p>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Card 2: Maintenance préventive -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-gray-900 mb-1">Maintenance préventive</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Interventions planifiées pour éviter les pannes
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3: Intervention rapide -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-base font-bold text-gray-900 mb-1">Intervention rapide</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Temps de réponse optimisés selon vos SLA
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Image -->
                    <div class="relative">
                        <div class="relative h-[360px] rounded-lg overflow-hidden shadow-lg">
                            <img src="{{ asset('images/Maintenance.jpg') }}" 
                                 alt="Hotline et maintenance" 
                                 loading="eager"
                                 decoding="sync"
                                 class="w-full h-full object-cover">
                            <!-- Text Overlay -->
                            <div class="absolute bottom-8 left-8">
                                <h3 class="text-white text-2xl font-bold mb-2">Support réactif</h3>
                                <p class="text-white text-base">Résolution rapide de vos problèmes IT</p>
                            </div>
                        </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Why Choose Dwesta Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Pourquoi confier votre informatique à <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Dwesta</span> ?
                    </h2>
                    <p class="text-base text-gray-600">
                        Une expertise technique reconnue au service de votre performance
                    </p>
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Équipe Experte -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 text-center">
                        <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Équipe Experte</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Techniciens certifiés avec une solide expérience terrain et internationale.
                        </p>
                    </div>

                    <!-- Card 2: Réactivité Garantie -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 text-center">
                        <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Réactivité Garantie</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Temps de réponse optimisés et interventions rapides pour minimiser les interruptions.
                        </p>
                    </div>

                    <!-- Card 3: Solutions complètes -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 text-center">
                        <div class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Solutions complètes</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            De l'infogérance au déploiement réseau, une approche globale de vos besoins informatiques.
                        </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section id="contact" class="py-8 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                Prêt à optimiser votre <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">infrastructure IT</span> ?
                </h2>
                <p class="text-base text-gray-600 mb-6 font-light">
                Discutons de vos besoins informatiques et construisons ensemble une infrastructure fiable et performante.
            </p>
            <div class="flex justify-center">
                <a href="/contact" class="bg-[#FF6B35] text-white px-7 py-3 rounded-lg font-semibold text-base hover:shadow-lg transition-all duration-300">
                    Nous contacter
                </a>
            </div>
            </div>
        </section>

    <!-- Custom Scrollbar & Hide Blue Button -->
    <style>
        /* Custom Gray Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 6px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }

        /* Hide any blue circular buttons */
        button[style*="background"][style*="blue"],
        button[class*="blue"],
        a[style*="background"][style*="blue"],
        div[style*="background"][style*="blue"] {
            display: none !important;
        }
        
        /* Hide common back-to-top button patterns */
        [class*="back-to-top"],
        [id*="back-to-top"],
        [class*="scroll-top"],
        [id*="scroll-top"],
        button[style*="position: fixed"][style*="bottom"],
        a[style*="position: fixed"][style*="bottom"] {
            display: none !important;
        }
    </style>

    <script>
        // Additional script to hide any dynamically added blue buttons
        document.addEventListener('DOMContentLoaded', function() {
            // Create a MutationObserver to watch for dynamically added elements
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) { // Element node
                            // Check if it's a blue button or circular element
                            const style = window.getComputedStyle(node);
                            if (style.backgroundColor.includes('rgb(0, 0, 255)') || 
                                style.backgroundColor.includes('blue') ||
                                node.style.backgroundColor.includes('blue')) {
                                node.style.display = 'none';
                            }
                        }
                    });
                });
            });

            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });
    </script>
</x-main-layout>