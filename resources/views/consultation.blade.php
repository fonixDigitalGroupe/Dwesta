<x-main-layout>
    <!-- Form Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Form Container -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-8 md:p-10">
                <!-- Form Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Planifier une consultation
                    </h1>
                    <p class="text-base text-gray-600">
                        Remplissez le formulaire ci-dessous pour organiser une rencontre avec notre équipe d'experts.
                    </p>
                </div>

                <form action="{{ route('consultation.send') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Row 1: Nom complet et Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nom complet -->
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-900 mb-2">
                            Nom complet <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nom" 
                            name="nom" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            value="{{ old('nom') }}"
                        >
                        @error('nom')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900 mb-2">
                            Adresse e-mail <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            value="{{ old('email') }}"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Row 2: Société et Téléphone -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Société -->
                    <div>
                        <label for="societe" class="block text-sm font-medium text-gray-900 mb-2">
                            Société
                        </label>
                        <input 
                            type="text" 
                            id="societe" 
                            name="societe"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            value="{{ old('societe') }}"
                        >
                    </div>

                    <!-- Téléphone -->
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-900 mb-2">
                            Téléphone
                        </label>
                        <input 
                            type="tel" 
                            id="telephone" 
                            name="telephone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            value="{{ old('telephone') }}"
                        >
                    </div>
                </div>

                <!-- Service d'intérêt -->
                <div>
                    <label for="service" class="block text-sm font-medium text-gray-900 mb-2">
                        Service d'intérêt <span class="text-red-500">*</span>
                    </label>
                    <select 
                        id="service" 
                        name="service" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent appearance-none bg-white select-gray-highlight"
                        style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;"
                    >
                        <option value="">Sélectionnez un service</option>
                        <option value="Cybersécurité" {{ old('service') == 'Cybersécurité' ? 'selected' : '' }}>Cybersécurité</option>
                        <option value="Services informatiques" {{ old('service') == 'Services informatiques' ? 'selected' : '' }}>Services informatiques</option>
                        <option value="IoT & OT" {{ old('service') == 'IoT & OT' ? 'selected' : '' }}>IoT & OT</option>
                        <option value="Développement applicatif" {{ old('service') == 'Développement applicatif' ? 'selected' : '' }}>Développement applicatif</option>
                        <option value="Conseils & Régie" {{ old('service') == 'Conseils & Régie' ? 'selected' : '' }}>Conseils & Régie</option>
                        <option value="Autre" {{ old('service') == 'Autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                    @error('service')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date et heure souhaitées -->
                <div>
                    <label for="date_heure" class="block text-sm font-medium text-gray-900 mb-2">
                        Date et heure souhaitées <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="datetime-local" 
                        id="date_heure" 
                        name="date_heure" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        value="{{ old('date_heure') }}"
                    >
                    @error('date_heure')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-900 mb-2">
                        Message
                    </label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="5"
                        placeholder="Ajoutez des détails sur votre projet..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none"
                    >{{ old('message') }}</textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button 
                        type="submit"
                        class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold py-4 px-6 rounded-lg hover:from-orange-600 hover:to-orange-700 transition-all duration-300 shadow-lg hover:shadow-xl"
                    >
                        Envoyer la demande
                    </button>
                </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Custom Scrollbar and Select Highlight -->
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
        
        /* Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }

        /* Couleur de sélection grise pour le select */
        select option {
            background-color: white;
            color: #1f2937;
        }

        select option:checked {
            background-color: #d1d5db !important;
            background: #d1d5db !important;
            color: #1f2937 !important;
        }

        /* Couleur de survol grise au lieu de bleue */
        select option:hover,
        select option:focus {
            background-color: #e5e7eb !important;
            background: #e5e7eb !important;
            color: #1f2937 !important;
            box-shadow: 0 0 10px 100px #e5e7eb inset !important;
        }

        /* Firefox - survol gris */
        select option:hover {
            background: #e5e7eb linear-gradient(0deg, #e5e7eb 0%, #e5e7eb 100%) !important;
        }

        /* Firefox - sélection grise */
        select option:checked {
            background: #d1d5db linear-gradient(0deg, #d1d5db 0%, #d1d5db 100%) !important;
        }

        /* Webkit browsers */
        select:focus option:checked {
            background: #d1d5db !important;
        }

        select:focus option:hover {
            background: #e5e7eb !important;
        }

        /* Spécifique pour le select service */
        #service option:checked {
            background-color: #d1d5db !important;
            box-shadow: 0 0 10px 100px #d1d5db inset !important;
        }

        #service option:hover {
            background-color: #e5e7eb !important;
            box-shadow: 0 0 10px 100px #e5e7eb inset !important;
        }

        /* Scrollbar grise pour la liste déroulante du select */
        select::-webkit-scrollbar {
            width: 8px;
        }

        select::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        select::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        select::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Masquer le bouton de retour en haut - tous les types */
        [class*="back-to-top"],
        [id*="back-to-top"],
        [class*="scroll-to-top"],
        [id*="scroll-to-top"],
        [class*="scroll-top"],
        [id*="scroll-top"],
        button[onclick*="scrollTo"],
        .fixed.bottom-8.right-8:not(nav):not(header),
        .fixed.bottom-4.right-4:not(nav):not(header),
        button.fixed.rounded-full:not(nav button):not(header button),
        a.fixed.rounded-full:not(nav a):not(header a),
        div[style*="position: fixed"][style*="bottom"]:not(nav):not(header),
        button[style*="position: fixed"][style*="bottom"]:not(nav button):not(header button),
        a[style*="position: fixed"][style*="bottom"]:not(nav a):not(header a) {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
            z-index: -9999 !important;
        }

        /* Masquer spécifiquement les boutons bleus circulaires en bas à droite (pas dans la nav) */
        button.bg-blue-500.rounded-full:not(nav button):not(header button),
        button.bg-blue-600.rounded-full:not(nav button):not(header button),
        a.bg-blue-500.rounded-full:not(nav a):not(header a),
        a.bg-blue-600.rounded-full:not(nav a):not(header a) {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
        }

        /* S'assurer que la navigation est visible et unique */
        nav {
            display: block !important;
            opacity: 1 !important;
            visibility: visible !important;
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            z-index: 50 !important;
        }

        /* Cacher les duplications de navigation */
        nav + nav,
        nav ~ nav {
            display: none !important;
        }
    </style>

    <script>
        // Masquer dynamiquement les boutons de retour en haut ajoutés après le chargement
        document.addEventListener('DOMContentLoaded', function() {
            // S'assurer qu'il n'y a qu'une seule navigation
            const navs = document.querySelectorAll('nav');
            if (navs.length > 1) {
                // Garder seulement la première navigation
                for (let i = 1; i < navs.length; i++) {
                    navs[i].remove();
                }
            }

            // Fonction pour masquer un élément
            function hideElement(element) {
                if (element && element.style) {
                    element.style.display = 'none';
                    element.style.opacity = '0';
                    element.style.visibility = 'hidden';
                    element.style.pointerEvents = 'none';
                    element.style.zIndex = '-9999';
                }
            }

            // Observer pour les éléments ajoutés dynamiquement
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) {
                            // Vérifier si c'est un bouton fixe en bas à droite
                            const style = window.getComputedStyle(node);
                            const isFixed = style.position === 'fixed';
                            const isBottom = style.bottom && style.bottom !== 'auto';
                            const isRight = style.right && style.right !== 'auto';
                            
                            if (isFixed && (isBottom || isRight)) {
                                hideElement(node);
                            }

                            // Vérifier les classes
                            if (node.classList && (
                                node.classList.toString().includes('back-to-top') ||
                                node.classList.toString().includes('scroll-to-top') ||
                                node.classList.toString().includes('scroll-top') ||
                                node.classList.toString().includes('bg-blue')
                            )) {
                                hideElement(node);
                            }

                            // Vérifier les SVG de flèche
                            if (node.innerHTML && (
                                node.innerHTML.includes('arrow-up') ||
                                node.innerHTML.includes('chevron-up') ||
                                node.innerHTML.includes('M5 10l7-7m0 0l7 7')
                            )) {
                                hideElement(node);
                            }
                        }
                    });
                });
            });

            observer.observe(document.body, {
                childList: true,
                subtree: true
            });

            // Masquer immédiatement tous les boutons existants
            function hideAllScrollButtons() {
                // Tous les boutons et liens fixed (sauf nav et header)
                const fixedElements = document.querySelectorAll('.fixed, [style*="position: fixed"]');
                fixedElements.forEach(function(el) {
                    // Ne pas masquer la navigation ou le header
                    if (el.tagName === 'NAV' || el.tagName === 'HEADER' || 
                        el.closest('nav') || el.closest('header')) {
                        return;
                    }
                    
                    const rect = el.getBoundingClientRect();
                    const style = window.getComputedStyle(el);
                    if (style.position === 'fixed' && (style.bottom !== 'auto' || style.right !== 'auto')) {
                        hideElement(el);
                    }
                });

                // Boutons avec classes spécifiques
                const buttons = document.querySelectorAll(
                    '[class*="back"], [class*="scroll"], [class*="top"], ' +
                    'button.bg-blue-500, button.bg-blue-600, ' +
                    'a.bg-blue-500, a.bg-blue-600, ' +
                    'button.rounded-full.fixed, a.rounded-full.fixed'
                );
                buttons.forEach(function(btn) {
                    if (btn.textContent.toLowerCase().includes('haut') || 
                        btn.textContent.toLowerCase().includes('top') ||
                        btn.innerHTML.includes('arrow-up') ||
                        btn.innerHTML.includes('chevron-up') ||
                        btn.classList.toString().includes('bg-blue')) {
                        hideElement(btn);
                    }
                });
            }

            // Exécuter plusieurs fois pour attraper tous les boutons
            setTimeout(hideAllScrollButtons, 100);
            setTimeout(hideAllScrollButtons, 500);
            setTimeout(hideAllScrollButtons, 1000);
            setTimeout(hideAllScrollButtons, 2000);
        });
    </script>
</x-main-layout>

