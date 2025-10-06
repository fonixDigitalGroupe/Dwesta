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
                            Développement applicatif
                        </h1>
                    </div>
                    
                    <!-- Subtitle -->
                    <h2 class="text-sm md:text-base font-normal text-gray-600 leading-relaxed">
                        Solutions logicielles sur mesure pour votre entreprise
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
                            Applications sur mesure<br><span class="text-[#FF6B35]">pour votre succès</span>
                        </h2>
                        
                        <!-- Description -->
                        <p class="text-base text-gray-600 leading-relaxed">
                            Nous développons des applications personnalisées qui répondent parfaitement à vos besoins métier, en utilisant les technologies les plus récentes et les meilleures pratiques.
                        </p>
                    </div>
                    
                    <!-- Right Content - Image -->
                    <div class="relative h-64">
                        <img src="{{ asset('images/cap.png') }}" 
                             alt="Développement d'applications sur mesure" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Cards Section -->
        <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Card 1: Applications Web -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                Applications Web<br><span class="text-[#FF6B35]">et Mobile</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="Applications web et mobile" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Développement d'applications web et mobiles performantes, intuitives et adaptées à vos utilisateurs avec les dernières technologies.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Applications web responsives</strong><br>
                                        <span class="text-xs text-gray-600">Développement avec React, Vue.js, Angular.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Applications mobiles</strong><br>
                                        <span class="text-xs text-gray-600">iOS, Android et applications hybrides.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">APIs et microservices</strong><br>
                                        <span class="text-xs text-gray-600">Architecture moderne et scalable.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Card 2: Solutions Métier -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300">
                        <!-- Card Header -->
                        <div class="mb-6">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-gray-900 mb-4">
                                Solutions Métier<br><span class="text-[#FF6B35]">Personnalisées</span>
                            </h2>
                            
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('images/cap.png') }}" 
                                     alt="Solutions métier personnalisées" 
                                     class="w-full h-48 object-cover rounded-xl">
                            </div>
                            
                            <p class="text-base text-gray-600 leading-relaxed">
                                Conception et développement de solutions logicielles adaptées à vos processus métier spécifiques pour optimiser votre productivité.
                            </p>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Nos Services Clés :</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">ERP et CRM personnalisés</strong><br>
                                        <span class="text-xs text-gray-600">Systèmes de gestion adaptés à vos besoins.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Outils de gestion</strong><br>
                                        <span class="text-xs text-gray-600">Applications pour optimiser vos processus.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Intégration de systèmes</strong><br>
                                        <span class="text-xs text-gray-600">Connexion de vos applications existantes.</span>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <span class="w-2 h-2 bg-[#FF6B35] rounded-full mt-2 mr-3 flex-shrink-0"></span>
                                    <div>
                                        <strong class="text-gray-900 text-sm">Maintenance et support</strong><br>
                                        <span class="text-xs text-gray-600">Accompagnement continu de vos solutions.</span>
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
                         alt="Équipe de développement en action" 
                         class="w-full h-[500px] object-cover object-right">
                </div>
                
                <!-- Background with gradient overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0f172a] via-[#0f172a]/90 via-[#0f172a]/60 to-transparent rounded-2xl"></div>
            
            <div class="w-full px-6 sm:px-8 lg:px-12 relative z-10 py-16">
                <div class="max-w-4xl">
                    <!-- Main Title -->
                    <h2 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                        Expertise développement certifiée à votre service
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-200 leading-relaxed font-light mb-8">
                        Notre équipe de développeurs expérimentés maîtrise les technologies les plus récentes et les meilleures pratiques pour créer des applications robustes et performantes.
                    </p>
                    
                    <!-- Bullet Points -->
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Développeurs certifiés et expérimentés</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Technologies modernes et frameworks</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-white text-base font-medium">Méthodologies agiles et DevOps</span>
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
                    Discutons de votre <span class="text-[#FF6B35]">projet applicatif</span>
                </h2>
                <p class="text-base text-gray-600 mb-6 font-light">
                    Notre expertise en développement est la clé de votre transformation digitale.
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



