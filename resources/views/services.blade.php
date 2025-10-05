<x-main-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#F8F9FA] to-[#E9ECEF] min-h-[60vh] flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <div class="inline-block bg-[#FF6B35] text-white px-6 py-3 rounded-full text-sm font-semibold mb-6">
                    Nos Services
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-[#2c2c2c] mb-6">
                    Solutions technologiques<br><span class="text-[#FF6B35]">sur mesure</span>
                </h1>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto leading-relaxed mb-8">
                    Nous accompagnons votre transformation numérique avec des solutions innovantes et performantes, adaptées aux enjeux de votre entreprise.
                </p>
                <a href="#contact" class="bg-[#FF6B35] text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-[#e55a2b] transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Demander un devis
                </a>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-[#FF6B35]/10 text-[#FF6B35] px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    Nos Solutions
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#1a1a1a] mb-6">
                    Nos <span class="text-[#FF6B35]">Solutions</span>
                </h2>
                <p class="text-xl text-[#666666] max-w-3xl mx-auto leading-relaxed">
                    Des solutions technologiques complètes pour transformer votre entreprise et accélérer votre croissance numérique.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Conseils & Régie -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
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

                <!-- Service 2: Infrastructure Cloud -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Infrastructure Cloud</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                        Migration et gestion de votre infrastructure cloud pour optimiser vos performances, réduire vos coûts et améliorer votre agilité.
                    </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('infrastructure-cloud') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 3: Développement Web -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Développement Web</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                        Sites web et applications web modernes, responsives et performantes avec les dernières technologies et frameworks.
                    </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('developpement-web') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 4: Applications Mobiles -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 1.01L7 1c-1.1 0-1.99.9-1.99 2v18c0 1.1.89 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Applications Mobiles</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                        Applications iOS et Android natives et cross-platform pour étendre votre présence sur tous les appareils mobiles.
                    </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('applications-mobiles') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 5: Business Intelligence -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Business Intelligence</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                        Analyse de données et tableaux de bord interactifs pour transformer vos données en insights actionnables et décisions éclairées.
                    </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('business-intelligence') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>

                <!-- Service 6: Support & Maintenance -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group">
                    <!-- Effet de fond décoratif -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-[#FF6B35]/5 to-transparent rounded-full -translate-y-16 translate-x-16"></div>
                    
                    <div class="relative z-10">
                        <!-- Icône orange -->
                        <div class="w-16 h-16 bg-gradient-to-br from-[#FF6B35] to-[#e55a2b] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                        </svg>
                    </div>
                        
                        <!-- Contenu -->
                        <h3 class="text-2xl font-bold text-[#1a1a1a] mb-4 group-hover:text-[#FF6B35] transition-colors duration-300">Support & Maintenance</h3>
                    <p class="text-[#666666] text-base leading-relaxed mb-6">
                        Maintenance préventive, support technique 24/7 et mises à jour pour garantir la performance optimale de vos systèmes.
                    </p>
                        
                        <!-- Bouton -->
                        <a href="{{ route('support-maintenance') }}" class="text-[#FF6B35] font-semibold hover:text-[#e55a2b] transition-colors duration-300">
                            En savoir plus →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="py-20 bg-[#F8F9FA]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-[#2c2c2c] mb-6">
                Prêt à transformer votre<br><span class="text-[#FF6B35]">entreprise ?</span>
            </h2>
            <p class="text-xl text-[#666666] mb-8">
                Contactez-nous pour discuter de vos besoins et découvrir comment nos solutions peuvent vous aider.
            </p>
            <a href="{{ route('contact') }}" class="bg-[#FF6B35] text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-[#e55a2b] transition-all duration-300 transform hover:scale-105 shadow-lg">
                Demander un devis
            </a>
        </div>
    </section>
</x-main-layout>
