<x-main-layout>
    <!-- Hero Section -->
    <section id="home" class="relative bg-[#F8F6F3] min-h-[70vh] flex items-center overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <!-- Left Side - Text Content -->
                <div class="space-y-6 lg:space-y-8">
                    <!-- Main Heading -->
                    <h1 class="text-left" style="font-family: 'Inter', sans-serif; font-weight: 700; line-height: 1.2;">
                        <div class="animate-fade-in-up text-[#1a1a1a] text-5xl md:text-6xl lg:text-7xl mb-2" style="font-family: 'Inter', sans-serif; font-weight: 700;">L'énergie de</div>
                        <div class="animate-fade-in-up delay-200 text-[#1a1a1a] text-5xl md:text-6xl lg:text-7xl mb-2" style="font-family: 'Inter', sans-serif; font-weight: 700;">l'Afrique au</div>
                        <div class="animate-fade-in-up delay-400 text-[#1a1a1a] text-5xl md:text-6xl lg:text-7xl mb-2" style="font-family: 'Inter', sans-serif; font-weight: 700;">service d'un</div>
                        <div class="animate-fade-in-up delay-600 text-5xl md:text-6xl lg:text-7xl" style="font-family: 'Inter', sans-serif; font-weight: 700; text-transform: lowercase; background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">avenir connecté</div>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-xl text-[#666666] leading-relaxed max-w-2xl animate-fade-in-up delay-800">
                        Dwesta accompagne les entreprises et institutions dans la sécurisation de leurs systèmes, l'optimisation de leurs infrastructures IT et la transformation de leurs environnements IoT/OT. L'entreprise met l'expertise et l'innovation au service d'un développement technologique responsable et durable.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://calendly.com/contact-dwesta/rendez-vous-de-45-minutes" target="_blank" class="bg-[#FF6B35] text-white px-12 py-3 rounded-full font-bold text-lg hover:bg-[#E55A2B] transition-all duration-300 text-center inline-flex items-center justify-center gap-2" style="font-family: 'Inter', sans-serif; min-width: 280px;">
                            Prendre rendez-vous →
                        </a>
                        <a href="#services" class="bg-white border border-gray-300 text-[#1a1a1a] px-12 py-3 rounded-full font-bold text-lg hover:bg-gray-50 hover:border-gray-400 transition-all duration-300 text-center inline-flex items-center justify-center gap-3" style="font-family: 'Inter', sans-serif; min-width: 200px;">
                            <svg class="w-4 h-4 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                            </svg>
                            Nos services
                        </a>
                    </div>
                </div>
                
                <!-- Right Side - Image -->
                <div class="relative flex justify-center lg:justify-end items-center mt-8 lg:mt-8">
                    <!-- Main Image Container with Decorative Rectangles -->
                    <div class="relative">
                        <!-- Main Image Frame -->
                        <div class="relative shadow-2xl hero-rectangle w-[420px] h-[300px] md:w-[450px] md:h-[300px] lg:w-[600px] lg:h-[400px] border-[12px] md:border-[18px] lg:border-[24px] cursor-pointer overflow-hidden rounded-2xl transition-all duration-500 ease-in-out" 
                             style="transform: rotate(-5deg); background: white; border-color: white;"
                             onmouseenter="this.style.transform = 'rotate(0deg) scale(1.05) translateY(-10px)'"
                             onmouseleave="this.style.transform = 'rotate(-5deg) scale(1) translateY(0)'">
                            <img src="{{ asset('images/cap.png') }}" 
                                 alt="Dwesta Solutions" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Rectangle Coin Haut Droit (orange vif) -->
                        <div class="absolute w-12 h-12 md:w-16 md:h-16 lg:w-20 lg:h-20 rounded-xl animate-pulse-orange" style="right: -10px; top: -16px; z-index: 10;"></div>
                        
                        <!-- Rectangle Coin Bas Gauche (gris-bleu foncé) -->
                        <div class="absolute w-10 h-10 md:w-12 md:h-12 lg:w-16 lg:h-16 rounded-xl animate-float-vertical" style="left: -10px; bottom: -30px; background-color: #2D3748; opacity: 0.85; animation-delay: 1s; z-index: 10;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="pt-8 pb-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Contenu à gauche -->
                <div>
                    <!-- Badge "Depuis 2014" -->
                    <div class="inline-block border border-gray-300 rounded-lg px-6 py-3 mb-6">
                        <span class="font-bold text-lg" style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Depuis 2014</span>
                    </div>
                    
                    <!-- Titre principal -->
                    <h3 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-6 leading-tight mt-8">
                        <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">+10 ANS</span> D'EXISTENCE
                    </h3>
                    
                    <!-- Description -->
                    <p class="text-xl text-[#666666] leading-relaxed">
                        Fruit d'une expertise de <strong class="text-[#FF6B35]">+10 ans</strong>, DWESTA est aujourd'hui une société de conseil en transformation numérique, un partenaire de confiance résolument différent par sa culture d'entreprise et son agilité.
                    </p>
                </div>
                
                <!-- Stats à droite -->
                <div class="grid grid-cols-3 gap-8">
                    <!-- Continents -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-[#FF6B35] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-[#1b1b18] mb-1">2</div>
                        <div class="text-sm font-medium" style="font-family: 'Times New Roman', serif; background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Continent</div>
                    </div>
                    
                    <!-- Pays -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-[#FF6B35] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-[#1b1b18] mb-1 -ml-1">100+</div>
                        <div class="text-sm font-medium" style="font-family: 'Times New Roman', serif; background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Pays</div>
                    </div>
                    
                    <!-- Offres -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-[#FF6B35] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-[#1b1b18] mb-1">6</div>
                        <div class="text-sm font-medium whitespace-nowrap -ml-1" style="font-family: 'Times New Roman', serif; background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Offres majeures</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-12 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1a1a1a] mb-6">
                    Des solutions pour<br>
                    <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">chaque défi</span>
                </h2>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto leading-relaxed">
                    Nous proposons des solutions professionnelles pointues et adaptées : conseils, infogérance, développement, IT/OT/IOT et Cyber Sécurité.
                </p>
            </div>
            
            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Cybersécurité -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Cybersécurité</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Audit, conseils, formation en Cybersécurité. Revente de matériels et logiciels.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('cybersecurite') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                        En savoir plus →
                        </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: IoT & OT -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">IoT & OT</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Expertise en sécurisation et optimisation des environnements industriels et connectés.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('iot-ot') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                        En savoir plus →
                        </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Infrastructure IT -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Infrastructure IT</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Expertise en réseaux, systèmes, optimisation du SI. Assistance sur vos projets de refonte SI. Revente de matériels et logiciels.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('solution-informatique') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                        En savoir plus →
                        </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Conseils & Régie -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Conseils & Régie</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Accompagnement des entreprises sur des rôles clés comme DSI de transition, RSSI, Consultant IT MOE/MOA et Technicien IT.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('conseils') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                        En savoir plus →
                        </a>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Développement applicatif -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Développement applicatif</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Création de sites web, applications mobiles, design UX/UI, identité visuelle et marketing digital.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('developpement-applicatif') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                        En savoir plus →
                        </a>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Un projet en tête ? -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Un projet en tête ?</h3>
                        <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Discutons de <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">vos besoins</span> et trouvez ensemble la solution idéale.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center mt-6">
                            <a href="#contact" class="bg-white border-2 border-[#FF6B35] text-[#FF6B35] px-6 py-2 rounded-lg font-semibold hover:bg-[#FF6B35] hover:text-white transition-all duration-300">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fournisseur Officiel Section -->
    <section id="fournisseur" class="py-16 bg-[#FFFFFF] relative overflow-hidden">
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-6">Fournisseur officiel<br><span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">de technologies de pointe</span></h2>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto leading-relaxed">
                    Dwesta est partenaire certifié des leaders mondiaux de la cybersécurité, vous garantissant un accès privilégié aux meilleures solutions du marché.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <!-- Carte 1: Fortinet -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                            <img src="{{ asset('images/IMG-Fortinet.jpg') }}" 
                                 alt="Logo Fortinet" 
                                 class="w-16 h-16 object-cover rounded-xl"
                                 loading="lazy"
                                 decoding="async">
                        </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Fortinet</h3>
                        <div class="text-center mb-4">
                            <div class="inline-flex items-center px-4 py-2 bg-orange-50 text-[#FF6B35] text-sm font-semibold rounded-full border border-[#FF6B35]/20">
                                Partenaire Exclusif RCA
                            </div>
                        </div>
                        <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                      Partenaire officiel exclusif en République Centrafricaine pour les solutions de cybersécurité Fortinet : pare-feux, sécurité réseau et protection avancée.
                    </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="https://www.fortinet.com/corporate/about-us/request-a-quote" target="_blank" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                        Découvrir Fortinet
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                        </div>
                    </div>
                </div>

                <!-- Carte 2: ESET -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                            <img src="{{ asset('images/equipes/IMG-EST.jpg') }}" 
                                 alt="Logo ESET" 
                                 class="w-16 h-16 object-cover rounded-xl">
                        </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">ESET</h3>
                        <div class="text-center mb-4">
                            <div class="inline-flex items-center px-4 py-2 bg-orange-50 text-[#FF6B35] text-sm font-semibold rounded-full border border-[#FF6B35]/20">
                                Fournisseur Officiel
                            </div>
                        </div>
                        <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Distributeur officiel des solutions antivirus et de sécurité endpoints ESET, reconnues mondialement pour leur efficacité et leur légèreté.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="https://www.eset.com/fr/" target="_blank" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300 inline-flex items-center gap-2">
                                Découvrir ESET
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white relative overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-8 leading-tight">Une vision audacieuse,<br><span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">une expertise internationale</span></h2>
                    
                    <div class="space-y-6 mb-8">
                        <p class="text-lg text-[#666666] leading-relaxed">
                        Née de la vision de trois entrepreneurs africains, Dwesta capitalise sur une décennie d'expertise acquise auprès de leaders tels que Cisco, Palo Alto Networks et Orange.
                        </p>
                        <p class="text-lg text-[#666666] leading-relaxed">
                        Basés à Bangui et présents en France, nous accompagnons nos clients sur deux continents. Notre approche repose sur l'innovation, la performance et la collaboration pour fournir des solutions technologiques pointues, adaptées aux enjeux de chaque entreprise.
                        </p>
                    </div>
                    
                    <!-- Trois éléments clés superposés -->
                    <div class="space-y-4 mb-8">
                        <!-- Innovation et performance -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-50 rounded-2xl mr-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-base text-[#1a1a1a]">Innovation et performance au cœur de notre ADN</p>
                            </div>
                        </div>
                        
                        <!-- Équipe passionnée -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-50 rounded-2xl mr-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-base text-[#1a1a1a]">Équipe passionnée pour des solutions adaptées</p>
                            </div>
                        </div>
                        
                        <!-- Présence internationale -->
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-orange-50 rounded-2xl mr-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#FF6B35]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-base text-[#1a1a1a]">Présence internationale Afrique et Europe</p>
                            </div>
                        </div>
                    </div>
                    

                </div>
                
                <div class="lg:ml-8">
                    <div class="text-center mb-8">
                        <h3 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-6 leading-tight">Vos Interlocuteurs</h3>
                        <p class="text-xl text-[#FF6B35] font-semibold mb-8">Des experts passionnés à votre service</p>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- CEO -->
                        <div class="bg-white p-6 shadow-xl border border-gray-100 relative overflow-hidden">
                            <div class="relative z-10 flex items-center">
                                <div class="w-20 h-20 overflow-hidden mr-6">
                                    <img src="{{ asset('images/equipes/IMG_CEO.JPG') }}" 
                                         alt="Davesne Yaya" 
                                         class="w-full h-full object-cover"
                                         loading="lazy"
                                         decoding="async">
                                </div>
                                <div>
                            <h4 class="text-xl font-bold text-[#1b1b18] mb-1">Davesne Yaya</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">CEO</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- COO -->
                        <div class="bg-white p-6 shadow-xl border border-gray-100 relative overflow-hidden">
                            <div class="relative z-10 flex items-center">
                                <div class="w-20 h-20 overflow-hidden mr-6">
                                    <img src="{{ asset('images/equipes/IMG_COO.JPG') }}" 
                                         alt="Abdoulaye Nayelwa" 
                                         class="w-full h-full object-cover"
                                         loading="lazy"
                                         decoding="async">
                                </div>
                                <div>
                            <h4 class="text-xl font-bold text-[#1b1b18] mb-1">Abdoulaye Nayelwa</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">COO</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CSO -->
                        <div class="bg-white p-6 shadow-xl border border-gray-100 relative overflow-hidden">
                            <div class="relative z-10 flex items-center">
                                <div class="w-20 h-20 overflow-hidden mr-6">
                                    <img src="{{ asset('images/equipes/IMG_CSO.JPG') }}" 
                                         alt="Pamela Denis" 
                                         class="w-full h-full object-cover"
                                         loading="lazy"
                                         decoding="async">
                                </div>
                                <div>
                            <h4 class="text-xl font-bold text-[#1b1b18] mb-1">Pamela Denis</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">CSO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-6">Prêt à démarrer votre<br><span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">prochain projet ?</span></h2>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto leading-relaxed">
                    Discutons de la manière dont nous pouvons vous aider à transformer votre entreprise. Contactez-nous dès aujourd'hui.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 max-w-6xl mx-auto items-center overflow-hidden rounded-2xl shadow-2xl">
                <!-- Image -->
                <div class="relative group h-[700px] bg-gradient-to-br from-gray-100 to-gray-200">
                    <div class="relative overflow-hidden h-full w-full flex items-center justify-center">
                        <!-- Placeholder avec icône -->
                        <div id="image-placeholder" class="flex flex-col items-center justify-center text-gray-400">
                            <svg class="w-24 h-24 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-lg font-medium">Contact Dwesta</p>
                        </div>
                        
                        <!-- Image cachée par défaut -->
                        <img id="contact-image" 
                             src="{{ asset('images/IMG-contact.jpg') }}" 
                             alt="Contact Dwesta Solutions" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 absolute inset-0"
                             loading="lazy"
                             decoding="async"
                             style="opacity: 0; transition: opacity 0.5s ease-in-out;"
                             onload="this.style.opacity='1'; document.getElementById('image-placeholder').style.display='none';"
                             onerror="this.style.display='none'; document.getElementById('image-placeholder').style.display='flex';">
                    </div>
                </div>
                
                <!-- Formulaire -->
                <div class="bg-white p-8 relative overflow-hidden h-[700px] flex flex-col">
                    
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="mb-8">
                            <h3 class="text-3xl font-bold text-[#1b1b18] mb-3">Envoyez-nous un message</h3>
                        </div>
                        
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST" class="flex flex-col h-full space-y-3">
                            @csrf
                        <div>
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Nom complet</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white text-base" placeholder="Votre nom complet" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <div>
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Email</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white text-base" placeholder="votre@email.com" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <div>
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Objet</label>
                                <input type="text" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white text-base" placeholder="Objet de votre message" value="{{ old('subject') }}">
                                @error('subject')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Message</label>
                                <textarea name="message" required class="w-full h-28 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white resize-none text-base" placeholder="Décrivez votre projet en détail...">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                            <button type="submit" class="w-full bg-[#FF6B35] text-white py-3 rounded-lg font-semibold text-base hover:bg-[#E55A2B] transition-all duration-300 shadow-lg inline-flex items-center justify-center gap-2">
                            Envoyer le message
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Scrollbar Styles -->
    <style>
        /* Webkit browsers (Chrome, Safari, Edge) */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        /* Firefox */
        html {
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }
        
        /* Hide any back to top buttons */
        [id*="back-to-top"],
        [class*="back-to-top"],
        [id*="scroll-top"],
        [class*="scroll-top"],
        .scroll-to-top,
        .back-to-top,
        #scroll-to-top,
        #back-to-top,
        /* Additional selectors for blue button */
        button[style*="background-color: blue"],
        button[style*="background: blue"],
        .bg-blue-500,
        .bg-blue-600,
        .bg-blue-700,
        [style*="background-color: rgb(59, 130, 246)"],
        [style*="background-color: #3b82f6"],
        [style*="background-color: #2563eb"],
        [style*="background-color: #1d4ed8"],
        /* Generic blue circular buttons */
        button[class*="rounded-full"][class*="bg-blue"],
        div[class*="rounded-full"][class*="bg-blue"],
        /* Fixed positioned blue elements */
        [style*="position: fixed"][style*="background-color: blue"],
        [style*="position: fixed"][style*="background: blue"],
        /* Any element with blue background and arrow */
        [class*="bg-blue"] svg,
        [style*="background-color: blue"] svg,
        [style*="background: blue"] svg {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
    </style>

    <!-- Image Loading and Blue Button Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Optimize contact image loading
            const contactImage = document.querySelector('img[alt="Contact Dwesta Solutions"]');
            if (contactImage) {
                // Preload the image
                const img = new Image();
                img.onload = function() {
                    contactImage.style.opacity = '1';
                };
                img.onerror = function() {
                    contactImage.style.display = 'none';
                    contactImage.parentElement.style.background = 'linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%)';
                };
                img.src = contactImage.src;
            }
            
            // Function to hide blue buttons
            function hideBlueButtons() {
                const selectors = [
                    'button[style*="background-color: blue"]',
                    'button[style*="background: blue"]',
                    '.bg-blue-500',
                    '.bg-blue-600', 
                    '.bg-blue-700',
                    '[style*="background-color: rgb(59, 130, 246)"]',
                    '[style*="background-color: #3b82f6"]',
                    '[style*="background-color: #2563eb"]',
                    '[style*="background-color: #1d4ed8"]',
                    'button[class*="rounded-full"][class*="bg-blue"]',
                    'div[class*="rounded-full"][class*="bg-blue"]'
                ];
                
                selectors.forEach(selector => {
                    const elements = document.querySelectorAll(selector);
                    elements.forEach(element => {
                        const hasArrow = element.querySelector('svg') || element.innerHTML.includes('arrow') || element.innerHTML.includes('chevron');
                        const isFixed = window.getComputedStyle(element).position === 'fixed' || 
                                       element.style.position === 'fixed' ||
                                       element.classList.contains('fixed');
                        
                        if (hasArrow || isFixed) {
                            element.style.display = 'none !important';
                            element.style.visibility = 'hidden !important';
                            element.style.opacity = '0 !important';
                            element.style.pointerEvents = 'none !important';
                        }
                    });
                });
            }
            
            // Run immediately
            hideBlueButtons();
            
            // Run after delays
            setTimeout(hideBlueButtons, 1000);
            setTimeout(hideBlueButtons, 3000);
            
            // Watch for new elements
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList') {
                        hideBlueButtons();
                    }
                });
            });
            
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });
    </script>

    <!-- Script pour optimiser le chargement de l'image de contact -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Précharger l'image de contact
            const contactImage = new Image();
            contactImage.src = "{{ asset('images/IMG-contact.jpg') }}";
            
            contactImage.onload = function() {
                // L'image est chargée, on peut l'afficher
                const imgElement = document.getElementById('contact-image');
                const placeholder = document.getElementById('image-placeholder');
                
                if (imgElement && placeholder) {
                    imgElement.style.opacity = '1';
                    placeholder.style.display = 'none';
                }
            };
            
            contactImage.onerror = function() {
                // En cas d'erreur, garder le placeholder
                const placeholder = document.getElementById('image-placeholder');
                if (placeholder) {
                    placeholder.style.display = 'flex';
                }
            };
        });
    </script>

    <!-- CSS pour les animations des rectangles -->
    <style>
        @keyframes float-slow {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        @keyframes float-medium {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(-3deg);
            }
        }

        @keyframes float-fast {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-25px) rotate(7deg);
            }
        }

        .animate-float-slow {
            animation: float-slow 4s ease-in-out infinite;
        }

        .animate-float-medium {
            animation: float-medium 3s ease-in-out infinite;
        }

        .animate-float-fast {
            animation: float-fast 3.5s ease-in-out infinite;
        }

        @keyframes float-vertical {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .animate-float-vertical {
            animation: float-vertical 2s ease-in-out infinite;
        }

        @keyframes pulse-orange {
            0%, 100% {
                background-color: #FF8A5B;
                opacity: 0.85;
            }
            50% {
                background-color: #E55A2B;
                opacity: 1;
            }
        }

        .animate-pulse-orange {
            animation: pulse-orange 2s ease-in-out infinite;
        }
    </style>

</x-main-layout>