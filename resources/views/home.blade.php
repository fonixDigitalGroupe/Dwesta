<x-main-layout>
    <!-- Hero Section -->
    <section id="home" class="relative bg-[#FF6B35]/10 min-h-[70vh] flex items-center overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-[#FF6B35]/20 to-transparent rounded-full animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-[#FF6B35]/15 to-transparent rounded-full animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-[#FF6B35]/15 to-transparent rounded-full animate-pulse delay-500"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <!-- Left Side - Text Content -->
                <div class="space-y-6 lg:space-y-8 transform rotate-1">
                    <!-- Main Heading -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-[#2c2c2c]">
                        <div class="animate-fade-in-up">L'énergie de</div>
                        <div class="animate-fade-in-up delay-200">l'Afrique au</div>
                        <div class="animate-fade-in-up delay-400">service d'un</div>
                        <div class="text-[#D2691E] animate-fade-in-up delay-600 font-bold">avenir connecté</div>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-xl text-[#666666] leading-relaxed max-w-2xl animate-fade-in-up delay-800">
                        Dwesta accompagne les entreprises et institutions dans la sécurisation de leurs systèmes, l'optimisation de leurs infrastructures IT et la transformation de leurs environnements IoT/OT. L'entreprise met l'expertise et l'innovation au service d'un développement technologique responsable et durable.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up delay-1000">
                        <a href="#contact" class="bg-gradient-to-r from-[#FF6B35] to-[#FF8C42] text-white px-8 py-4 rounded-xl font-semibold text-base hover:from-[#FF8C42] hover:to-[#FF6B35] transition-all duration-300 text-center hover:scale-105 hover:shadow-xl transform hover:-translate-y-1">
                            Prendre rendez-vous
                        </a>
                        <a href="#services" class="bg-gradient-to-r from-white to-gray-50 border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl font-semibold text-base hover:bg-gradient-to-r hover:from-gray-100 hover:to-gray-200 hover:border-gray-400 hover:text-gray-800 transition-all duration-300 text-center hover:scale-105 hover:shadow-xl transform hover:-translate-y-1">
                            Découvrir nos services
                        </a>
                    </div>
                </div>
                
                <!-- Right Side - Image -->
                <div class="relative flex justify-center lg:justify-end items-end mt-8 lg:mt-8">
                    <!-- Main Image Container -->
                    <div class="relative bg-white rounded-2xl shadow-2xl hero-rectangle w-[550px] h-[350px] border-[24px] border-white cursor-pointer overflow-hidden transform rotate-3" 
                         onclick="this.classList.add('click-animation'); setTimeout(() => { this.classList.remove('click-animation'); }, 200);">
                        <img src="{{ asset('images/cap.png') }}" 
                             alt="Dwesta Solutions" 
                             class="w-full h-full object-cover rounded-2xl">
                    </div>
                    <!-- Orange square overlay -->
                    <div class="absolute top-4 right-4 w-16 h-16 bg-[#FF6B35] rounded-xl shadow-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Contenu à gauche -->
                <div>
                    <!-- Badge "Depuis 2014" -->
                    <div class="inline-block border border-gray-300 rounded-lg px-4 py-2 mb-6">
                        <span class="text-[#FF6B35] font-bold text-sm">Depuis 2014</span>
                    </div>
                    
                    <!-- Titre principal -->
                    <h3 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-6 leading-tight">
                        <span class="text-[#FF6B35]">+10 ANS</span> D'EXISTENCE
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
                        <div class="w-16 h-16 bg-orange-50 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="text-sm text-black font-medium mb-1">Continent</div>
                        <div class="text-2xl font-semibold text-[#FF6B35]">2</div>
                    </div>
                    
                    <!-- Pays -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-50 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="text-sm text-black font-medium mb-1">Pays présents</div>
                        <div class="text-2xl font-semibold text-[#FF6B35]">100+</div>
                    </div>
                    
                    <!-- Offres -->
                    <div class="text-center">
                        <div class="w-16 h-16 bg-orange-50 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div class="text-sm text-black font-medium mb-1">Offres majeures</div>
                        <div class="text-2xl font-semibold text-[#FF6B35]">6</div>
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
                <h2 class="text-4xl md:text-5xl font-bold text-[#1a1a1a] mb-6">
                    Des solutions pour<br>
                    <span class="text-[#FF6B35]">chaque défi</span>
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
                            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Cybersécurité</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Audit, conseils, formation en Cybersécurité. Revente de matériels et logiciels.
                    </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('cybersecurite') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                        En savoir plus
                    </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: IoT & OT -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">IoT & OT</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Expertise en sécurisation et optimisation des environnements industriels et connectés.
                    </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('iot-ot') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                        En savoir plus
                    </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Infrastructure IT -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Infrastructure IT</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Expertise en réseaux, systèmes, optimisation du SI. Assistance sur vos projets de refonte SI. Revente de matériels et logiciels.
                    </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('solution-informatique') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                        En savoir plus
                    </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Conseils & Régie -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Conseils & Régie</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Accompagnement des entreprises sur des rôles clés comme DSI de transition, RSSI, Consultant IT MOE/MOA et Technicien IT.
                    </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('conseils') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                        En savoir plus
                    </a>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Développement applicatif -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Développement applicatif</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Création de sites web, applications mobiles, design UX/UI, identité visuelle et marketing digital.
                    </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="{{ route('developpement-applicatif') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                        En savoir plus
                    </a>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Un projet en tête ? -->
                <div class="bg-white p-8 shadow-xl border border-gray-100 relative overflow-hidden">
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-24 h-24 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                            <svg class="w-12 h-12 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 text-center">Un projet en tête ?</h3>
                        <p class="text-[#666666] text-base leading-relaxed mb-6 text-center">
                            Discutons de vos besoins et trouvez ensemble la solution idéale.
                        </p>
                        
                        <!-- Bouton -->
                        <div class="text-center">
                            <a href="#contact" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
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
                <h2 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-6">Fournisseur officiel<br><span class="text-[#FF6B35]">de technologies de pointe</span></h2>
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
                                 class="w-16 h-16 object-cover rounded-xl">
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
                            <a href="https://www.fortinet.com/corporate/about-us/request-a-quote" target="_blank" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                                Découvrir Fortinet
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
                            <a href="https://www.eset.com/fr/" target="_blank" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                                Découvrir ESET
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
                    <h2 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-8 leading-tight">Une vision audacieuse,<br><span class="text-[#FF6B35]">une expertise internationale</span></h2>
                    
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
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <div class="bg-white p-4 shadow-xl border border-gray-100 relative overflow-hidden">
                            <div class="relative z-10 flex items-center">
                                <div class="w-16 h-16 overflow-hidden mr-4">
                                    <img src="{{ asset('images/equipes/IMG_CEO.JPG') }}" 
                                         alt="Davesne Yaya" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-1">Davesne Yaya</h4>
                            <p class="text-[#FF6B35] text-sm font-semibold">CEO</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- COO -->
                        <div class="bg-white p-4 shadow-xl border border-gray-100 relative overflow-hidden">
                            <div class="relative z-10 flex items-center">
                                <div class="w-16 h-16 overflow-hidden mr-4">
                                    <img src="{{ asset('images/equipes/IMG_COO.JPG') }}" 
                                         alt="Abdoulaye Nayelwa" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-1">Abdoulaye Nayelwa</h4>
                            <p class="text-[#FF6B35] text-sm font-semibold">COO</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CSO -->
                        <div class="bg-white p-4 shadow-xl border border-gray-100 relative overflow-hidden">
                            <div class="relative z-10 flex items-center">
                                <div class="w-16 h-16 overflow-hidden mr-4">
                                    <img src="{{ asset('images/equipes/IMG_CSO.JPG') }}" 
                                         alt="Pamela Denis" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                            <h4 class="text-lg font-bold text-[#1b1b18] mb-1">Pamela Denis</h4>
                            <p class="text-[#FF6B35] text-sm font-semibold">CSO</p>
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
                <h2 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-6">Prêt à démarrer votre<br><span class="text-[#FF6B35]">prochain projet ?</span></h2>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto leading-relaxed">
                    Discutons de la manière dont nous pouvons vous aider à transformer votre entreprise. Contactez-nous dès aujourd'hui.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 max-w-6xl mx-auto items-center overflow-hidden rounded-2xl shadow-2xl">
                <!-- Image -->
                <div class="relative group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/IMG-contact.jpg') }}" 
                             alt="Contact Dwesta Solutions" 
                             class="w-full h-[700px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                
                <!-- Formulaire -->
                <div class="bg-white p-8 relative overflow-hidden h-[700px] flex flex-col">
                    
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="mb-8">
                            <h3 class="text-3xl font-bold text-[#1b1b18] mb-3">Envoyez-nous un message</h3>
                        </div>
                        
                        <form class="flex flex-col h-full space-y-6">
                        <div>
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Nom complet</label>
                                <input type="text" class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white text-base" placeholder="Votre nom complet">
                        </div>
                        <div>
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Email</label>
                                <input type="email" class="w-full px-4 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white text-base" placeholder="votre@email.com">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-semibold mb-3 text-[#1b1b18]">Message</label>
                                <textarea class="w-full h-32 px-4 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-[#FF6B35] transition-all duration-300 bg-white resize-none text-base" placeholder="Décrivez votre projet en détail..."></textarea>
                        </div>
                            <button type="submit" class="w-full bg-[#FF6B35] text-white py-4 rounded-lg font-semibold text-base hover:bg-[#e55a2b] transition-all duration-300 shadow-lg">
                            Envoyer le message
                                <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>