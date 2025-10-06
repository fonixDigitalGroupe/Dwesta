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
    <section class="py-16 bg-white">
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
                        <div class="w-20 h-20 mx-auto mb-4 bg-gray-800 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-[#1b1b18] mb-2">2</div>
                        <div class="text-[#FF6B35] font-semibold">Continents</div>
                    </div>
                    
                    <!-- Pays -->
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gray-800 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-[#1b1b18] mb-2">100+</div>
                        <div class="text-[#FF6B35] font-semibold">Pays</div>
                    </div>
                    
                    <!-- Offres -->
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gray-800 rounded-full flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-[#1b1b18] mb-2">6</div>
                        <div class="text-[#FF6B35] font-semibold">Offres</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-12 bg-[#FFFFFF] relative overflow-hidden">
        <!-- Dotted pattern overlay - more visible like reference image -->
        <div class="absolute inset-0 opacity-40" style="background-image: radial-gradient(circle, #FF6B35 1.5px, transparent 1.5px); background-size: 20px 20px;"></div>
        <!-- Subtle gradient overlay for depth -->
        <div class="absolute inset-0 bg-gradient-to-br from-transparent via-[#FF6B35]/3 to-transparent"></div>
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
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.2C16,16.8 15.4,17.3 14.8,17.3H9.2C8.6,17.3 8,16.8 8,16.2V12.6C8,12.1 8.6,11.5 9.2,11.5V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.5V10C13.5,8.7 12.8,8.2 12,8.2Z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Cybersécurité</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Audit, conseils, formation en Cybersécurité. Revente de matériels et logiciels.
                        </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('cybersecurite') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 2: IoT & OT -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M12,6A6,6 0 0,0 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12A6,6 0 0,0 12,6M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8Z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">IoT & OT</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Expertise en sécurisation et optimisation des environnements industriels et connectés.
                        </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('iot-ot') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 3: Infrastructure IT -->
                <div class="group bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Infrastructure IT</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Expertise en réseaux, systèmes, optimisation du SI. Assistance sur vos projets de refonte SI. Revente de matériels et logiciels.
                        </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('solution-informatique') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 4: Conseils & Régie -->
                <div class="group bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Conseils & Régie</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Accompagnement des entreprises sur des rôles clés comme DSI de transition, RSSI, Consultant IT MOE/MOA et Technicien IT.
                        </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('conseils') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 5: Développement applicatif -->
                <div class="group bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Développement applicatif</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                            Création de sites web, applications mobiles, design UX/UI, identité visuelle et marketing digital.
                        </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('developpement-applicatif') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
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
                <div class="group bg-white p-4 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 text-center transform hover:-translate-y-2 relative overflow-hidden">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                    <div class="mb-6">
                        <div class="relative flex items-center justify-center mx-auto mb-4">
                                <div class="w-20 h-20 bg-gradient-to-br from-[#FF6B35]/10 to-[#FF6B35]/5 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                            <img src="{{ asset('images/IMG-Fortinet.jpg') }}" 
                                 alt="Logo Fortinet" 
                                         class="w-16 h-16 object-cover rounded-xl">
                                </div>
                        </div>
                            <h3 class="text-xl font-bold text-[#1b1b18] mb-2 group-hover:text-[#FF6B35] transition-colors duration-300">Fortinet</h3>
                            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#FF6B35]/10 to-[#FF6B35]/5 text-[#FF6B35] text-sm font-semibold rounded-full border border-[#FF6B35]/20">
                            Partenaire Exclusif RCA
                        </div>
                    </div>
                        <p class="text-[#666666] mb-4 leading-relaxed text-sm">
                      Partenaire officiel exclusif en République Centrafricaine pour les solutions de cybersécurité Fortinet : pare-feux, sécurité réseau et protection avancée.
                    </p>
                    <a href="https://www.fortinet.com/corporate/about-us/request-a-quote" target="_blank" 
                            class="inline-flex items-center justify-center w-full bg-gradient-to-r from-[#FF6B35] to-[#FF8C42] text-white px-4 py-3 rounded-lg font-semibold hover:from-[#FF8C42] hover:to-[#FF6B35] transition-all duration-300 transform hover:scale-105 shadow-md">
                        Découvrir Fortinet
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                    </div>
                </div>

                <!-- Carte 2: ESET -->
                <div class="group bg-white p-4 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 text-center transform hover:-translate-y-2 relative overflow-hidden">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                    <div class="mb-6">
                        <div class="relative flex items-center justify-center mx-auto mb-4">
                                <div class="w-20 h-20 bg-gradient-to-br from-[#FF6B35]/10 to-[#FF6B35]/5 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                            <img src="{{ asset('images/equipes/IMG-EST.jpg') }}" 
                                 alt="Logo ESET" 
                                         class="w-16 h-16 object-cover rounded-xl">
                                </div>
                        </div>
                            <h3 class="text-xl font-bold text-[#1b1b18] mb-2 group-hover:text-[#FF6B35] transition-colors duration-300">ESET</h3>
                            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#FF6B35]/10 to-[#FF6B35]/5 text-[#FF6B35] text-sm font-semibold rounded-full border border-[#FF6B35]/20">
                            Fournisseur Officiel
                        </div>
                    </div>
                        <p class="text-[#666666] mb-4 leading-relaxed text-sm">
                             Distributeur officiel des solutions antivirus et de sécurité endpoints ESET, reconnues mondialement <span class="text-white">pour leur efficacité et leur légèreté.VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV</span>
                    </p>
                    <a href="https://www.eset.com/fr/" target="_blank" 
                            class="inline-flex items-center justify-center w-full bg-gradient-to-r from-[#FF6B35] to-[#FF8C42] text-white px-4 py-3 rounded-lg font-semibold hover:from-[#FF8C42] hover:to-[#FF6B35] transition-all duration-300 transform hover:scale-105 shadow-md">
                        Découvrir ESET
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
            
            <!-- Section Accès privilégié -->
            <div class="mt-12 md:mt-16 max-w-4xl mx-auto">
                <div class="bg-gray-50 p-6 md:p-8 rounded-2xl shadow-lg border border-gray-100">
                    <h3 class="text-xl md:text-2xl font-bold text-[#1b1b18] mb-6 md:mb-8 text-center leading-tight">
                        Accès privilégié aux dernières innovations
                    </h3>
                    <p class="text-[#666666] text-base md:text-lg leading-relaxed text-center max-w-3xl mx-auto">
                        Bénéficiez de notre statut de partenaire officiel : support technique dédié, formations certifiées et tarifs préférentiels sur l'ensemble des gammes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-[#F5F5F5] relative overflow-hidden">
        <!-- Subtle pattern overlay -->
        <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle, #FF6B35 1px, transparent 1px); background-size: 25px 25px;"></div>
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#FF6B35]/5 to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-8 leading-tight">Une vision audacieuse,<br><span class="text-[#FF6B35]">une expertise internationale</span></h2>
                    
                    <div class="space-y-3 mb-8">
                        <p class="text-lg text-[#666666] leading-relaxed">
                        Née de la vision de trois entrepreneurs africains, Dwesta capitalise sur une décennie d'expertise acquise auprès de leaders tels que Cisco, Palo Alto Networks et Orange.
                        </p>
                        <p class="text-lg text-[#666666] leading-relaxed">
                        Basés à Bangui et présents en France, nous accompagnons nos clients sur deux continents. Notre approche repose sur l'innovation, la performance et la collaboration pour fournir des solutions technologiques pointues, adaptées aux enjeux de chaque entreprise.
                        </p>
                    </div>
                    
                    <!-- Trois éléments clés améliorés -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center p-4 bg-white/50 rounded-2xl border border-[#FF6B35]/10 hover:bg-white/80 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#FF6B35] to-[#FF8C42] rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <p class="text-base text-[#666666] font-semibold">Innovation et performance au cœur de notre ADN.</p>
                        </div>
                        
                        <div class="flex items-center p-4 bg-white/50 rounded-2xl border border-[#FF6B35]/10 hover:bg-white/80 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#FF6B35] to-[#FF8C42] rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H17c-.8 0-1.54.37-2.01.99L14 10.5 12.01 8.99A2.5 2.5 0 0 0 10 8H8.46c-.8 0-1.54.37-2.01.99L4 10.5V22h2v-6h2.5l2.5-6h2l2.5 6H14v6h2z"/>
                                </svg>
                            </div>
                            <p class="text-base text-[#666666] font-semibold">Une équipe passionnée pour des solutions adaptées.</p>
                        </div>
                        
                        <div class="flex items-center p-4 bg-white/50 rounded-2xl border border-[#FF6B35]/10 hover:bg-white/80 transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-br from-[#FF6B35] to-[#FF8C42] rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                </svg>
                            </div>
                            <p class="text-base text-[#666666] font-semibold">Présence en Afrique et en Europe pour un accompagnement de proximité.</p>
                        </div>
                    </div>
                    

                </div>
                
                <div class="lg:ml-8">
                    <div class="text-center mb-8">
                        <h3 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-6 leading-tight">Vos Interlocuteurs</h3>
                        <p class="text-xl text-[#FF6B35] font-semibold mb-8">Des experts passionnés à votre service</p>
                    </div>
                    
                    <div class="space-y-6">
                        <!-- CEO -->
                        <div class="group bg-white p-6 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 transform hover:-translate-y-2 relative overflow-hidden">
                            <!-- Effet de fond décoratif -->
                            <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-12 translate-x-12"></div>
                            
                            <div class="relative z-10 flex items-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mr-6 shadow-lg group-hover:scale-105 transition-transform duration-300">
                                    <img src="{{ asset('images/equipes/IMG_CEO.JPG') }}" 
                                         alt="Davesne Yaya" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#1b1b18] mb-1 group-hover:text-[#FF6B35] transition-colors duration-300">Davesne Yaya</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">CEO & Fondateur</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- COO -->
                        <div class="group bg-white p-6 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 transform hover:-translate-y-2 relative overflow-hidden">
                            <!-- Effet de fond décoratif -->
                            <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-12 translate-x-12"></div>
                            
                            <div class="relative z-10 flex items-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mr-6 shadow-lg group-hover:scale-105 transition-transform duration-300">
                                    <img src="{{ asset('images/equipes/IMG_COO.JPG') }}" 
                                         alt="Abdoulaye Nayelwa" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#1b1b18] mb-1 group-hover:text-[#FF6B35] transition-colors duration-300">Abdoulaye Nayelwa</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">COO & Co-fondateur</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CSO -->
                        <div class="group bg-white p-6 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 transform hover:-translate-y-2 relative overflow-hidden">
                            <!-- Effet de fond décoratif -->
                            <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-12 translate-x-12"></div>
                            
                            <div class="relative z-10 flex items-center">
                                <div class="w-20 h-20 rounded-full overflow-hidden mr-6 shadow-lg group-hover:scale-105 transition-transform duration-300">
                                    <img src="{{ asset('images/equipes/IMG_CSO.JPG') }}" 
                                         alt="Pamela Denis" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-[#1b1b18] mb-1 group-hover:text-[#FF6B35] transition-colors duration-300">Pamela Denis</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">CSO & Co-fondatrice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-[#FFFFFF] relative overflow-hidden">
        
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
                            <h3 class="text-3xl font-bold text-[#1b1b18] mb-3">Parlons de votre projet</h3>
                            <p class="text-[#666666] text-lg">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
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