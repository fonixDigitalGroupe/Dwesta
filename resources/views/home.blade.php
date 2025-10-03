<x-main-layout>
    <!-- Hero Section -->
    <section id="home" class="relative bg-[#F0EDE8] min-h-[70vh] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                <!-- Left Side - Text Content -->
                <div class="space-y-6 lg:space-y-8">
                 
        
                    
                    <!-- Main Heading -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-[#2c2c2c]">
                        <div>L'énergie de</div>
                        <div>l'Afrique au</div>
                        <div>service d'un</div>
                        <div class="text-[#FF6B35]">avenir connecté</div>
                    </h1>
                    
                    <!-- Description -->
                    <p class="text-xl text-[#666666] leading-relaxed max-w-2xl">
                        Dwesta SAS valorise le savoir-faire du continent et répond aux enjeux technologiques pour un futur ambitieux et responsable.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-[#FF6B35] text-white px-6 py-3 rounded-md font-medium text-base hover:bg-[#e55a2b] transition-all duration-300 text-center">
                            Prendre rendez-vous
                        </a>
                        <a href="#services" class="border border-[#2c2c2c] text-[#2c2c2c] px-6 py-3 rounded-md font-medium text-base hover:bg-[#2c2c2c] hover:text-white transition-all duration-300 text-center">
                            Découvrir nos services
                        </a>
                    </div>
                </div>
                
                <!-- Right Side - Image -->
                <div class="relative flex justify-center lg:justify-end items-end mt-8 lg:mt-8">
                    <!-- Main Image Container -->
                    <div class="relative bg-white rounded-2xl shadow-2xl hero-rectangle w-[550px] h-[350px] border border-gray-200 cursor-pointer overflow-hidden" 
                         onclick="this.classList.add('click-animation'); setTimeout(() => { this.classList.remove('click-animation'); }, 200);">
                        <img src="{{ asset('images/cap.png') }}" 
                             alt="Dwesta Solutions" 
                             class="w-full h-full object-cover rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Experience Section -->
    <section class="py-20 bg-gradient-to-br from-[#F8F9FA] to-[#E9ECEF]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Contenu à gauche -->
                <div>
                    <div class="inline-block bg-[#FF6B35] text-white px-6 py-3 rounded-full text-sm font-semibold mb-6">
                        Depuis 2014
                    </div>
                    <h3 class="text-4xl md:text-5xl font-bold text-[#1b1b18] mb-6 leading-tight">
                        +10 ans d'existence
                    </h3>
                    <p class="text-xl text-[#666666] leading-relaxed">
                        Fruit d'une expertise de <strong class="text-[#FF6B35]">+10 ans</strong>, DWESTA est aujourd'hui une société de conseil en transformation numérique, un partenaire de confiance résolument différent par sa culture d'entreprise et son agilité.
                    </p>
                </div>
                
                <!-- Stats à droite -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white w-24 h-24 rounded-full shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center py-2">
                        <div class="text-lg font-bold text-[#FF6B35] mb-2 mt-3">2</div>
                        <div class="text-xs font-semibold text-[#1b1b18] text-center">Continents</div>
                        <div class="w-6 h-6 bg-gradient-to-r from-[#FF6B35] to-[#e55a2b] rounded-full flex items-center justify-center mt-2">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="bg-white w-24 h-24 rounded-full shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center py-2">
                        <div class="text-lg font-bold text-[#FF6B35] mb-2 mt-3">100+</div>
                        <div class="text-xs font-semibold text-[#1b1b18] text-center">Pays</div>
                        <div class="w-6 h-6 bg-gradient-to-r from-[#FF6B35] to-[#e55a2b] rounded-full flex items-center justify-center mt-2">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="bg-white w-24 h-24 rounded-full shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 flex flex-col items-center justify-center py-2">
                        <div class="text-lg font-bold text-[#FF6B35] mb-2 mt-3">6+</div>
                        <div class="text-xs font-semibold text-[#1b1b18] text-center">Offres</div>
                        <div class="w-6 h-6 bg-gradient-to-r from-[#FF6B35] to-[#e55a2b] rounded-full flex items-center justify-center mt-2">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-gray-100 pt-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#2c2c2c] mb-3">Nos Services</h2>
                <p class="text-lg text-[#666666] max-w-2xl mx-auto">
                
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <img src="https://via.placeholder.com/48x48/cccccc/666666?text=Web" 
                             alt="Développement Web" 
                             class="w-10 h-10 rounded-lg object-cover">
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-[#2c2c2c]">Développement Web</h3>
                    <p class="text-[#666666] text-sm mb-3">Sites web modernes et applications web sur mesure avec les dernières technologies.</p>
                    <a href="#contact" class="inline-flex items-center text-[#FF6B35] text-sm font-medium hover:text-[#e55a2b] transition-colors">
                        En savoir plus
                        <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <img src="https://via.placeholder.com/48x48/cccccc/666666?text=Mobile" 
                             alt="Applications Mobile" 
                             class="w-10 h-10 rounded-lg object-cover">
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-[#2c2c2c]">Applications Mobile</h3>
                    <p class="text-[#666666] text-sm mb-3">Applications iOS et Android natives et cross-platform avec React Native et Flutter.</p>
                    <a href="#contact" class="inline-flex items-center text-[#FF6B35] text-sm font-medium hover:text-[#e55a2b] transition-colors">
                        En savoir plus
                        <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <img src="https://via.placeholder.com/48x48/cccccc/666666?text=E-com" 
                             alt="E-commerce" 
                             class="w-10 h-10 rounded-lg object-cover">
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-[#2c2c2c]">E-commerce</h3>
                    <p class="text-[#666666] text-sm mb-3">Boutiques en ligne performantes avec gestion complète des commandes et paiements.</p>
                    <a href="#contact" class="inline-flex items-center text-[#FF6B35] text-sm font-medium hover:text-[#e55a2b] transition-colors">
                        En savoir plus
                        <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <img src="https://via.placeholder.com/48x48/cccccc/666666?text=Consult" 
                             alt="Consulting Digital" 
                             class="w-10 h-10 rounded-lg object-cover">
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-[#2c2c2c]">Developpement web</h3>
                    <p class="text-[#666666] text-sm mb-3">Sites web modernes et applications web sur mesure avec les dernières technologies.</p>
                    <a href="#contact" class="inline-flex items-center text-[#FF6B35] text-sm font-medium hover:text-[#e55a2b] transition-colors">
                        En savoir plus
                        <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <img src="https://via.placeholder.com/48x48/cccccc/666666?text=SEO" 
                             alt="Performance & SEO" 
                             class="w-10 h-10 rounded-lg object-cover">
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-[#2c2c2c]">Developpement web</h3>
                    <p class="text-[#666666] text-sm mb-3">Sites web modernes et applications web sur mesure avec les dernières technologies.</p>>
                    <a href="#contact" class="inline-flex items-center text-[#FF6B35] text-sm font-medium hover:text-[#e55a2b] transition-colors">
                        En savoir plus
                        <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <img src="https://via.placeholder.com/48x48/cccccc/666666?text=Support" 
                             alt="Maintenance & Support" 
                             class="w-10 h-10 rounded-lg object-cover">
                    </div>
                    <h3 class="text-lg font-semibold mb-3 text-[#2c2c2c]">Developpement web</h3>
                    <p class="text-[#666666] text-sm mb-3">Sites web modernes et applications web sur mesure avec les dernières technologies.</p>
                    <a href="#contact" class="inline-flex items-center text-[#FF6B35] text-sm font-medium hover:text-[#e55a2b] transition-colors">
                        En savoir plus
                        <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
    

        </div>
    </section>

    <!-- Fournisseur Officiel Section -->
    <section class="py-20 bg-gradient-to-br from-[#F8F9FA] to-[#E9ECEF]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-4">Fournisseur officiel<br><span class="text-[#FF6B35]">de technologies de pointe</span></h2>
                <p class="text-xl text-[#666666] max-w-2xl mx-auto">
                    Dwesta est partenaire certifié des leaders mondiaux de la cybersécurité, vous garantissant un accès privilégié aux meilleures solutions du marché.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <!-- Carte 1: Fortinet -->
                <div class="group bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 text-center transform hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="relative flex items-center justify-center mx-auto mb-4">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#FF6B35] to-[#e55a2b] rounded-2xl blur-lg opacity-20 group-hover:opacity-30 transition-opacity"></div>
                            <img src="{{ asset('images/IMG-Fortinet.jpg') }}" 
                                 alt="Logo Fortinet" 
                                 class="relative w-20 h-20 object-cover rounded-2xl shadow-lg">
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-2">Fortinet</h3>
                        <div class="inline-flex items-center px-3 py-1 bg-[#FF6B35]/10 text-[#FF6B35] text-sm font-semibold rounded-full">
                            Partenaire Exclusif
                        </div>
                    </div>
                    <p class="text-[#666666] mb-6 leading-relaxed text-sm">
                      Partenaire officiel exclusif en République Centrafricaine pour les solutions de cybersécurité Fortinet : pare-feux, sécurité réseau et protection avancée.
                    </p>
                    <a href="https://www.fortinet.com/corporate/about-us/request-a-quote" target="_blank" 
                        class="inline-flex items-center justify-center w-full bg-white border-2 border-[#FF6B35] text-[#FF6B35] px-6 py-3 rounded-xl font-semibold hover:bg-[#FF6B35] hover:text-white transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Découvrir Fortinet
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>

                <!-- Carte 2: ESET -->
                <div class="group bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 text-center transform hover:-translate-y-2">
                    <div class="mb-6">
                        <div class="relative flex items-center justify-center mx-auto mb-4">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#FF6B35] to-[#e55a2b] rounded-2xl blur-lg opacity-20 group-hover:opacity-30 transition-opacity"></div>
                            <img src="{{ asset('images/equipes/IMG-EST.jpg') }}" 
                                 alt="Logo ESET" 
                                 class="relative w-20 h-20 object-cover rounded-2xl shadow-lg">
                        </div>
                        <h3 class="text-xl font-bold text-[#1b1b18] mb-2">ESET</h3>
                        <div class="inline-flex items-center px-3 py-1 bg-[#FF6B35]/10 text-[#FF6B35] text-sm font-semibold rounded-full">
                            Distributeur Officiel
                        </div>
                    </div>
                    <p class="text-[#666666] mb-6 leading-relaxed text-sm">
                        Distributeur officiel des solutions antivirus et de sécurité endpoints ESET, reconnues mondialement pour leur efficacité et leur légèreté.       <span class="text-white">VVVVVVVVVVVVVVV</span>
                    </p>
                    <div class="mb-6"></div>
                    <a href="https://www.eset.com/fr/" target="_blank" 
                        class="inline-flex items-center justify-center w-full bg-white border-2 border-[#FF6B35] text-[#FF6B35] px-6 py-3 rounded-xl font-semibold hover:bg-[#FF6B35] hover:text-white transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Découvrir ESET
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gradient-to-br from-[#F8F6F3] to-[#F5F3F0]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
                <div>
                    <div class="inline-block bg-[#FF6B35] text-white px-6 py-3 rounded-full text-sm font-semibold mb-6">
                        Notre Histoire
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-[#2c2c2c] mb-8 leading-tight">Une vision audacieuse,<br><span class="ml-16 text-[#FF6B35]">une expertise internationale</span></h2>
                    
                    <div class="space-y-3 mb-8">
                        <p class="text-lg text-[#666666] leading-relaxed">
                        Née de la vision de trois entrepreneurs africains, Dwesta capitalise sur une décennie d'expertise acquise auprès de leaders tels que Cisco, Palo Alto Networks et Orange.
                        </p>
                        <p class="text-lg text-[#666666] leading-relaxed">
                        Basés à Bangui et présents en France, nous accompagnons nos clients sur deux continents. Notre approche repose sur l'innovation, la performance et la collaboration pour fournir des solutions technologiques pointues, adaptées aux enjeux de chaque entreprise.
                        </p>
                    </div>
                    
                    <!-- Trois éléments clés -->
                    <div class="space-y-1 mb-6 -mt-8">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-white border-2 border-[#FF6B35] rounded-full flex items-center justify-center mr-3 shadow-md">
                                <svg class="w-4 h-4 text-[#FF6B35]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <p class="text-base text-[#666666] font-medium">Innovation et performance au cœur de notre ADN.</p>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-white border-2 border-[#FF6B35] rounded-full flex items-center justify-center mr-3 shadow-md">
                                <svg class="w-4 h-4 text-[#FF6B35]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.54 8H17c-.8 0-1.54.37-2.01.99L14 10.5 12.01 8.99A2.5 2.5 0 0 0 10 8H8.46c-.8 0-1.54.37-2.01.99L4 10.5V22h2v-6h2.5l2.5-6h2l2.5 6H14v6h2z"/>
                                </svg>
                            </div>
                            <p class="text-base text-[#666666] font-medium">Une équipe passionnée pour des solutions adaptées.</p>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-white border-2 border-[#FF6B35] rounded-full flex items-center justify-center mr-3 shadow-md">
                                <svg class="w-4 h-4 text-[#FF6B35]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                </svg>
                            </div>
                            <p class="text-base text-[#666666] font-medium">Présence en Afrique et en Europe pour un accompagnement de proximité.</p>
                        </div>
                    </div>
                    

                </div>
                
                <div class="ml-24 pt-16">
                    <div class="text-center mb-4">
                        <span class="text-[#FF6B35] text-lg font-semibold">✦ Notre équipe</span>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1b1b18] mb-8 text-center">Vos Interlocuteurs</h3>
                    
                    <div class="space-y-6 max-w-64 mt-20">
                        <!-- CEO -->
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                            <div class="flex items-center">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-6">
                                    <img src="{{ asset('images/equipes/IMG_CEO.JPG') }}" 
                                         alt="Davesne Yaya" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-[#1b1b18]">Davesne Yaya</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">CEO</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- COO -->
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                            <div class="flex items-center">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-6">
                                    <img src="{{ asset('images/equipes/IMG_COO.JPG') }}" 
                                         alt="Abdoulaye Nayelwa" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-[#1b1b18]">Abdoulaye Nayelwa</h4>
                                    <p class="text-[#FF6B35] text-base font-semibold">COO</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CSO -->
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                            <div class="flex items-center">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-6">
                                    <img src="{{ asset('images/equipes/IMG_CSO.JPG') }}" 
                                         alt="Pamela Denis" 
                                         class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-[#1b1b18]">Pamela Denis</h4>
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
    <section id="contact" class="py-20 bg-[#E5E5E5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-4">Prêt à démarrer votre<br><span class="text-[#FF6B35]">prochain projet ?</span></h2>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto">
                    Discussions de la manière dont nous pouvons vous aider à transformer votre entreprise. Contactez-nous dès aujourd'hui.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <!-- Image -->
                <div class="relative">
                    <div class="w-full h-full max-h-[300px] flex items-center justify-center">
                        <img src="{{ asset('images/IMG-contact.jpg') }}" 
                             alt="Contact Dwesta Solutions" 
                             class="w-full h-full rounded-l-xl object-cover">
                    </div>
                </div>
                
                <!-- Formulaire -->
                <div class="bg-white p-6 rounded-r-2xl shadow-lg border border-gray-100">
                    <h3 class="text-2xl font-bold text-[#1b1b18] mb-6">Envoyez-nous un message</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2 text-[#1b1b18]">Nom complet</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-[#1b1b18]">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-[#1b1b18]">Message</label>
                            <textarea rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent transition-colors" placeholder="Décrivez votre projet..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#FF6B35] text-white py-3 rounded-lg font-semibold text-base hover:bg-[#e55a2b] transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>