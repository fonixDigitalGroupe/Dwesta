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
                    <div class="relative bg-white rounded-2xl shadow-2xl hero-rectangle w-[550px] h-[350px] border border-gray-200 cursor-pointer" 
                         onclick="this.classList.add('click-animation'); setTimeout(() => { this.classList.remove('click-animation'); }, 200);">
                        <!-- Empty Frame -->
                        <div class="w-full h-full flex items-center justify-center">
                            <div class="text-center text-gray-400">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-sm">Image placeholder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Experience Section -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Contenu à gauche -->
                <div>
                    <div class="inline-block bg-[#FF6B35] text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                        Depuis 2014
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#2c2c2c] mb-4">
                        +10 ans d'existence
                    </h2>
                    <p class="text-lg text-[#666666] leading-relaxed">
                        Fruit d'une expertise de <strong>+10ans</strong>, DWESTA est aujourd'hui une société de conseil en transformation numérique, un partenaire de confiance
                    </p>
                </div>
                
                <!-- Stats à droite -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-[#FF6B35] mb-2">2</div>
                        <div class="text-lg font-semibold text-[#2c2c2c]">Continents</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-[#FF6B35] mb-2">100</div>
                        <div class="text-lg font-semibold text-[#2c2c2c]">Pays</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-[#FF6B35] mb-2">6</div>
                        <div class="text-lg font-semibold text-[#2c2c2c]">Offres Majeures</div>
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
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-[#2c2c2c] mb-4">Fournisseur Officiel</h2>
               
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto">
                <!-- Carte 1: Laravel -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <img src="https://via.placeholder.com/64x64/cccccc/666666?text=Logo" 
                                 alt="Logo Partenaire" 
                                 class="w-12 h-12 rounded-lg object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#2c2c2c]">Partenaire test 2 </h3>
                            <p class="text-sm text-[#FF6B35] font-medium"></p>
                        </div>
                    </div>
                    <p class="text-[#666666] mb-6 leading-relaxed">
                      description test 2.
                    </p>
                    <a href="" target="_blank" 
                        class="inline-flex items-center text-[#FF6B35] font-medium hover:text-[#e55a2b] transition-colors">
                        Visiter le site officiel
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>

                <!-- Carte 2: AWS -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <img src="https://via.placeholder.com/64x64/cccccc/666666?text=Logo" 
                                 alt="Logo Partenaire" 
                                 class="w-12 h-12 rounded-lg object-cover">
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#2c2c2c]">Partenaire test1</h3>
                            <p class="text-sm text-[#FF6B35] font-medium"></p>
                        </div>
                    </div>
                    <p class="text-[#666666] mb-6 leading-relaxed">
                        Description test.
                    </p>
                    <a href="" target="_blank" 
                        class="inline-flex items-center text-[#FF6B35] font-medium hover:text-[#e55a2b] transition-colors">
                        Visiter le site officiel
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-[#F5F3F0]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-6">À Propos de Dwesta</h2>
                    <p class="text-lg text-[#706f6c] mb-6 leading-relaxed">
                        Nous sommes une équipe passionnée de développeurs, designers et consultants qui créent des solutions digitales innovantes pour transformer votre entreprise et accélérer votre croissance.
                    </p>
                  
                 

                    <div class="space-y-4">
                      
                       
                      
                       
                    </div>
                </div>
                
                <div>
                    <h3 class="text-2xl font-bold text-[#1b1b18] mb-8 text-center">Vos Interlocuteurs</h3>
                    
                    <div class="space-y-6">
                        <!-- CEO -->
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                    <img src="https://via.placeholder.com/64x64/cccccc/666666?text=CEO" 
                                         alt="CEO" 
                                         class="w-14 h-14 rounded-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-[#1b1b18]">CEO</h4>
                                    <p class="text-[#706f6c] text-sm">Directeur Général</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- COO -->
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                    <img src="https://via.placeholder.com/64x64/cccccc/666666?text=COO" 
                                         alt="COO" 
                                         class="w-14 h-14 rounded-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-[#1b1b18]">COO</h4>
                                    <p class="text-[#706f6c] text-sm">Directeur des Opérations</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Responsable Pôle Sécurité -->
                        <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-100">
                            <div class="flex items-center">
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mr-4">
                                    <img src="https://via.placeholder.com/64x64/cccccc/666666?text=SEC" 
                                         alt="Responsable Sécurité" 
                                         class="w-14 h-14 rounded-full object-cover">
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-[#1b1b18]">Responsable Pôle Sécurité</h4>
                                    <p class="text-[#706f6c] text-sm">Expert en Cybersécurité</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#1b1b18] mb-4">Contactez-nous</h2>
             
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Carte/Image -->
                <div class="relative">
                    <div class="w-full h-full min-h-[500px] bg-gray-50 rounded-lg flex items-center justify-center border border-gray-200">
                        <img src="https://via.placeholder.com/400x400/cccccc/666666?text=Image" 
                             alt="Image placeholder" 
                             class="w-80 h-80 rounded-lg object-cover">
                    </div>
                </div>
                
                <div class="bg-[#FDFDFC] p-8 rounded-2xl border border-gray-200">
                    <h3 class="text-2xl font-semibold mb-6 text-[#1b1b18]">Envoyez-nous un message</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium mb-2 text-[#1b1b18]">Nom complet</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F53003] focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-[#1b1b18]">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F53003] focus:border-transparent transition-colors">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2 text-[#1b1b18]">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#F53003] focus:border-transparent transition-colors" placeholder="Décrivez votre projet..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#F53003] text-white py-4 rounded-lg font-semibold text-lg hover:bg-[#e02d03] transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>