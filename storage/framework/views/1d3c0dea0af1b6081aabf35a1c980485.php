<?php if (isset($component)) { $__componentOriginal66d7cfd03cd343304d81fe1e21646540 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66d7cfd03cd343304d81fe1e21646540 = $attributes; } ?>
<?php $component = App\View\Components\MainLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('main-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MainLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!-- Title Section -->
        <section class="bg-white py-12">
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
                            Cybersécurité
                        </h1>
                    </div>
                    
                    <!-- Subtitle -->
                    <h2 class="text-sm md:text-base font-normal text-gray-600 leading-relaxed">
                        Protection et sécurisation de vos systèmes d'information
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
                        Sécurisez vos<br><span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Systèmes d'information</span>
                        </h2>
                        
                        <!-- Description -->
                    <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                        Dwesta vous accompagne dans vos projets de sécurisation avec des solutions d'audit, de conseil et de déploiement de technologies de pointe. Partenaire officiel Fortinet en Centrafrique.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 2: Audit et Conseil -->
        <section class="py-8 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Left Column - Content -->
                    <div class="space-y-8">
                        <!-- Header Content -->
                        <div>
                            <h2 class="text-3xl md:text-4xl font-bold leading-tight text-black mb-4">
                                Audit et Conseil en <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Sécurité</span>
                            </h2>
                            <p class="text-base text-gray-600 leading-relaxed mb-6">
                                Notre équipe d'experts vous accompagne dans l'évaluation et l'amélioration de votre posture de sécurité avec des audits complets et des conseils stratégiques.
                            </p>
                            <h3 class="text-lg font-semibold text-gray-900 mb-6">Services de conseil</h3>
                        </div>
                        
                        <!-- Services List -->
                        <div class="space-y-6">
                            <!-- Service 1: Étude et suivi de projets Cyber -->
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-base font-bold text-gray-900 mb-1">Étude et suivi de projets Cyber</h4>
                                        <p class="text-sm text-gray-600 leading-relaxed">Accompagnement complet de vos initiatives sécurité</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Service 2: Audit de sécurité des SI -->
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-base font-bold text-gray-900 mb-1">Audit de sécurité des SI</h4>
                                        <p class="text-sm text-gray-600 leading-relaxed">Évaluation complète de votre infrastructure</p>
                        </div>
                    </div>
                            </div>
                            
                            <!-- Service 3: Schéma directeur Sécurité -->
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-base font-bold text-gray-900 mb-1">Schéma directeur Sécurité</h4>
                                        <p class="text-sm text-gray-600 leading-relaxed">Stratégie sécurité alignée sur vos objectifs</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Service 4: Formation et sensibilisation -->
                            <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                                <div class="flex items-start space-x-3">
                                    <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-base font-bold text-gray-900 mb-1">Formation et sensibilisation</h4>
                                        <p class="text-sm text-gray-600 leading-relaxed">Éducation aux risques cyber pour vos équipes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column - Image -->
                    <div class="relative">
                        <div class="relative h-[500px] rounded-lg overflow-hidden shadow-lg">
                            <img src="<?php echo e(asset('images/cyberaudit.jpg')); ?>" 
                                 alt="Audit cybersécurité" 
                                 loading="eager"
                                 decoding="sync"
                                 class="w-full h-full object-cover">
                            <!-- Text Overlay -->
                            <div class="absolute bottom-8 left-8">
                                <h3 class="text-white text-2xl font-bold mb-2">Audit complet</h3>
                                <p class="text-white text-base">Évaluation approfondie de vos systèmes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Logiciels et Equipements de Sécurité -->
        <section class="py-8 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-black mb-4">
                        Logiciels et Equipements de <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Sécurité</span>
                            </h2>
                    <p class="text-base text-gray-600 leading-relaxed">
                        Fournisseur officiel de solutions de cybersécurité avec une expertise particulière sur les technologies Fortinet et ESET. Partenaire exclusif en République Centrafricaine.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    <!-- Left Column - Cards -->
                    <div class="space-y-6">
                        <!-- Card 1: Logiciels de sécurité -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Logiciels de sécurité</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Antivirus, EDR, solutions de protection avancées
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 2: Pare-feux Fortinet -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Pare-feux Fortinet</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Protection périmétrique de nouvelle génération
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card 3: Mise en service -->
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-gray-900 mb-1">Mise en service</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">
                                        Installation et configuration par nos experts
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Image with Overlay -->
                    <div class="relative">
                        <div class="relative h-[300px] rounded-lg overflow-hidden">
                            <img src="<?php echo e(asset('images/protect.jpg')); ?>" 
                                 alt="Technologies avancées" 
                                 loading="eager"
                                 decoding="sync"
                                 class="w-full h-full object-cover">
                            <!-- Text Overlay -->
                            <div class="absolute bottom-6 left-6">
                                <h3 class="text-white text-xl font-bold mb-1">Technologies avancées</h3>
                                <p class="text-white text-sm">Solutions de sécurité de dernière génération</p>
                                    </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>

        <!-- Section 4: Pourquoi choisir Dwesta -->
        <section class="py-8 bg-gray-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Pourquoi choisir Dwesta pour votre <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">cybersécurité</span> ?
                    </h2>
                    <p class="text-base text-gray-600 max-w-3xl mx-auto">
                        Une expertise locale avec des standards internationaux
                    </p>
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Expertise Certifiée -->
                    <div class="bg-white rounded-lg p-8 text-center border border-gray-100 shadow-sm">
                        <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Expertise Certifiée</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Équipe d'experts formés aux dernières technologies et certifiés par nos partenaires.
                        </p>
                    </div>

                    <!-- Card 2: Proximité Locale -->
                    <div class="bg-white rounded-lg p-8 text-center border border-gray-100 shadow-sm">
                        <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Proximité Locale</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Présence locale avec une compréhension des enjeux spécifiques de la région.
                        </p>
                    </div>

                    <!-- Card 3: Soutien continu -->
                    <div class="bg-white rounded-lg p-8 text-center border border-gray-100 shadow-sm">
                        <div class="w-16 h-16 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Soutien continu</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Accompagnement et support technique disponibles pour assurer votre sérénité.
                        </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section id="contact" class="py-8 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                    Prêt à sécuriser vos <span style="background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 25%, #D44A1F 50%, #B8390F 75%, #A02D08 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">systèmes d'information</span> ?
                </h2>
                <p class="text-base text-gray-600 mb-6 font-light">
                    Discutons de vos besoins en cybersécurité et élaborons ensemble une stratégie de protection adaptée à votre organisation.
                </p>
                <div class="flex justify-center">
                    <a href="/contact" class="bg-[#FF6B35] text-white px-7 py-3 rounded-lg font-semibold text-base hover:shadow-lg transition-all duration-300">
                        Nous contacter
                    </a>
                </div>
            </div>
        </section>

    <!-- CSS spécifique pour la page cybersécurité -->
    <style>
        
        /* Barre de défilement grise */
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
        
        /* Pour Firefox */
        html {
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }
        
        /* Masquer le bouton bleu circulaire "back to top" */
        .back-to-top,
        [class*="back-to-top"],
        [id*="back-to-top"],
        [class*="scroll-top"],
        [id*="scroll-top"],
        button[class*="fixed"][class*="bottom"],
        button[class*="fixed"][class*="right"],
        .fixed.bottom-4.right-4,
        .fixed.bottom-6.right-6,
        .fixed.bottom-8.right-8,
        .fixed.bottom-10.right-10,
        .fixed.bottom-12.right-12,
        .fixed.bottom-16.right-16,
        .fixed.bottom-20.right-20,
        button[style*="position: fixed"][style*="bottom"],
        button[style*="position: fixed"][style*="right"],
        div[style*="position: fixed"][style*="bottom"],
        div[style*="position: fixed"][style*="right"],
        a[style*="position: fixed"][style*="bottom"],
        a[style*="position: fixed"][style*="right"] {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
        
        /* Masquer spécifiquement les boutons bleus circulaires */
        button[class*="bg-blue"],
        button[style*="background-color: blue"],
        button[style*="background: blue"],
        .bg-blue-500,
        .bg-blue-600,
        .bg-blue-700,
        .bg-blue-800,
        .bg-blue-900,
        button[class*="bg-blue"][class*="rounded-full"],
        button[class*="bg-blue"][class*="fixed"],
        div[class*="bg-blue"][class*="rounded-full"],
        div[class*="bg-blue"][class*="fixed"],
        a[class*="bg-blue"][class*="rounded-full"],
        a[class*="bg-blue"][class*="fixed"] {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
    </style>

    <!-- JavaScript pour masquer dynamiquement le bouton bleu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Masquer tous les boutons "back to top" ou similaires
            function hideBackToTopButtons() {
                const selectors = [
                    '.back-to-top',
                    '[class*="back-to-top"]',
                    '[id*="back-to-top"]',
                    '[class*="scroll-top"]',
                    '[id*="scroll-top"]',
                    'button[class*="fixed"][class*="bottom"]',
                    'button[class*="fixed"][class*="right"]',
                    '.fixed.bottom-4.right-4',
                    '.fixed.bottom-6.right-6',
                    '.fixed.bottom-8.right-8',
                    '.fixed.bottom-10.right-10',
                    '.fixed.bottom-12.right-12',
                    '.fixed.bottom-16.right-16',
                    '.fixed.bottom-20.right-20',
                    'button[class*="bg-blue"][class*="rounded-full"]',
                    'button[class*="bg-blue"][class*="fixed"]',
                    'div[class*="bg-blue"][class*="rounded-full"]',
                    'div[class*="bg-blue"][class*="fixed"]',
                    'a[class*="bg-blue"][class*="rounded-full"]',
                    'a[class*="bg-blue"][class*="fixed"]'
                ];
                
                selectors.forEach(selector => {
                    const elements = document.querySelectorAll(selector);
                    elements.forEach(element => {
                        element.style.display = 'none';
                        element.style.visibility = 'hidden';
                        element.style.opacity = '0';
                        element.style.pointerEvents = 'none';
                    });
                });
            }
            
            // Exécuter immédiatement
            hideBackToTopButtons();
            
            // Observer les changements dans le DOM pour masquer les nouveaux éléments
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList') {
                        hideBackToTopButtons();
                    }
                });
            });
            
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });
    </script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $attributes = $__attributesOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $component = $__componentOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__componentOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?><?php /**PATH C:\Users\LANDING DIALLO\Desktop\Projects\dewesta\dewesta\resources\views/services/cybersecurite.blade.php ENDPATH**/ ?>