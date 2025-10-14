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
    <!-- CSS spécifique pour masquer le bouton bleu -->
    <style>
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
    
    <style>
        .document-pdf {
            min-height: 297mm;
            padding: 25mm 20mm;
            line-height: 1.8;
        }
        
        .article-section {
            border-left: 3px solid #f3f4f6;
            padding-left: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .article-number {
            color: #F53003;
            font-weight: 700;
            margin-right: 0.5rem;
        }
        
        .toc-link {
            transition: all 0.3s ease;
            border-left: 2px solid transparent;
            padding-left: 1rem;
        }
        
        .toc-link:hover {
            border-left-color: #F53003;
            padding-left: 1.25rem;
        }
        
        .info-box {
            background: linear-gradient(135deg, #fef3f2 0%, #fff 100%);
            border-left: 4px solid #F53003;
        }
        
        @media (max-width: 768px) {
            .document-pdf {
                min-height: auto;
                padding: 40px 24px;
                border: none;
                box-shadow: none;
            }
            
            .article-section {
                padding-left: 1rem;
            }
            
            .toc-section {
                display: none;
            }
        }
        
        @media print {
            .document-pdf {
                box-shadow: none;
                border: none;
            }
            .toc-section {
                display: none;
            }
        }
        
        /* Scrollbar styling - Global */
        * {
            scrollbar-width: thin;
            scrollbar-color: #9ca3af #f3f4f6;
        }
        
        *::-webkit-scrollbar {
            width: 8px;
        }
        
        *::-webkit-scrollbar-track {
            background: #f3f4f6;
            border-radius: 4px;
        }
        
        *::-webkit-scrollbar-thumb {
            background: #9ca3af;
            border-radius: 4px;
        }
        
        *::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }
        
        /* Specific for document */
        .document-pdf {
            scrollbar-width: thin;
            scrollbar-color: #9ca3af #f3f4f6;
        }
        
        .document-pdf::-webkit-scrollbar {
            width: 8px;
        }
        
        .document-pdf::-webkit-scrollbar-track {
            background: #f3f4f6;
            border-radius: 4px;
        }
        
        .document-pdf::-webkit-scrollbar-thumb {
            background: #9ca3af;
            border-radius: 4px;
        }
        
        .document-pdf::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }
        
        /* NUCLEAR OPTION - Hide ALL blue circular buttons */
        * {
            /* Hide any element that could be a blue button */
        }
        
        /* Specific targeting for the blue circular button */
        button[style*="background-color: blue"],
        button[style*="background: blue"],
        button[style*="background-color: #007bff"],
        button[style*="background: #007bff"],
        button[style*="background-color: #0066cc"],
        button[style*="background: #0066cc"],
        button[style*="background-color: rgb(0, 123, 255)"],
        button[style*="background-color: rgb(0, 102, 204)"],
        button[style*="background-color: #0056b3"],
        button[style*="background-color: #004085"],
        /* Circular buttons */
        button[style*="border-radius: 50%"],
        button[style*="border-radius: 50px"],
        button[style*="border-radius: 25px"],
        button[style*="border-radius: 30px"],
        button[style*="border-radius: 40px"],
        /* Fixed position elements */
        *[style*="position: fixed"],
        button[style*="position: fixed"],
        a[style*="position: fixed"],
        div[style*="position: fixed"],
        span[style*="position: fixed"],
        /* Bottom right positioning */
        *[style*="bottom: 20px"][style*="right: 20px"],
        *[style*="bottom: 30px"][style*="right: 30px"],
        *[style*="bottom: 40px"][style*="right: 40px"],
        *[style*="bottom: 50px"][style*="right: 50px"],
        /* Any element with blue background */
        *[style*="background-color: blue"],
        *[style*="background: blue"],
        *[style*="background-color: #007bff"],
        *[style*="background: #007bff"],
        *[style*="background-color: #0066cc"],
        *[style*="background: #0066cc"],
        /* Common back-to-top selectors */
        [id*="back-to-top"],
        [class*="back-to-top"],
        [id*="scroll-top"],
        [class*="scroll-top"],
        .scroll-to-top,
        .back-to-top,
        #scroll-to-top,
        #back-to-top,
        /* Plugin-specific selectors */
        .wp-back-to-top,
        .back-to-top-button,
        .scroll-to-top-button,
        .top-button,
        .scroll-up,
        .go-to-top {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
            z-index: -9999 !important;
            position: absolute !important;
            left: -9999px !important;
            top: -9999px !important;
        }
    </style>
    
    <script>
        // IMMEDIATE EXECUTION - No waiting for DOM
        (function() {
            function nukeBlueButton() {
                // Get ALL elements on the page
                const allElements = document.querySelectorAll('*');
                
                allElements.forEach(el => {
                    const style = window.getComputedStyle(el);
                    const rect = el.getBoundingClientRect();
                    
                    // Check if it's a blue circular button in bottom right
                    if (style.position === 'fixed' && 
                        rect.bottom <= 100 && 
                        rect.right <= 100 &&
                        (style.backgroundColor.includes('blue') || 
                         style.backgroundColor.includes('rgb(0, 123, 255)') ||
                         style.backgroundColor.includes('rgb(0, 102, 204)') ||
                         style.backgroundColor.includes('#007bff') ||
                         style.backgroundColor.includes('#0066cc') ||
                         style.backgroundColor.includes('#0056b3') ||
                         style.backgroundColor.includes('#004085') ||
                         el.tagName === 'BUTTON' ||
                         el.tagName === 'A' ||
                         el.tagName === 'DIV' ||
                         el.tagName === 'SPAN')) {
                        
                        // NUCLEAR DESTRUCTION
                        el.style.display = 'none !important';
                        el.style.visibility = 'hidden !important';
                        el.style.opacity = '0 !important';
                        el.style.pointerEvents = 'none !important';
                        el.style.zIndex = '-9999 !important';
                        el.style.position = 'absolute !important';
                        el.style.left = '-9999px !important';
                        el.style.top = '-9999px !important';
                        el.remove();
                    }
                });
                
                // Also check for any blue elements
                const blueElements = document.querySelectorAll('*');
                blueElements.forEach(el => {
                    const style = window.getComputedStyle(el);
                    if (style.backgroundColor.includes('blue') || 
                        style.backgroundColor.includes('rgb(0, 123, 255)') ||
                        style.backgroundColor.includes('rgb(0, 102, 204)') ||
                        style.backgroundColor.includes('#007bff') ||
                        style.backgroundColor.includes('#0066cc')) {
                        
                        el.style.display = 'none !important';
                        el.style.visibility = 'hidden !important';
                        el.style.opacity = '0 !important';
                        el.remove();
                    }
                });
            }
            
            // Run immediately
            nukeBlueButton();
            
            // Run when DOM is ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', nukeBlueButton);
            } else {
                nukeBlueButton();
            }
            
            // Run on window load
            window.addEventListener('load', nukeBlueButton);
            
            // Run on scroll
            window.addEventListener('scroll', nukeBlueButton);
            
            // Run multiple times with delays
            setTimeout(nukeBlueButton, 100);
            setTimeout(nukeBlueButton, 500);
            setTimeout(nukeBlueButton, 1000);
            setTimeout(nukeBlueButton, 2000);
            setTimeout(nukeBlueButton, 5000);
            setTimeout(nukeBlueButton, 10000);
            
            // Use MutationObserver to catch dynamically added elements
            if (window.MutationObserver) {
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'childList') {
                            nukeBlueButton();
                        }
                    });
                });
                
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            }
        })();
    </script>
    
    <!-- SCRIPT ULTRA-AGRESSIF POUR MASQUER LE BOUTON BLEU -->
    <script>
        // EXECUTION IMMEDIATE - MASQUAGE TOTAL DU BOUTON BLEU
        (function() {
            function MASK_BLUE_BUTTON() {
                // Masquer TOUS les boutons bleus
                const allElements = document.querySelectorAll('*');
                allElements.forEach(el => {
                    const style = window.getComputedStyle(el);
                    const rect = el.getBoundingClientRect();
                    
                    // Masquer les boutons bleus en position fixe
                    if (style.position === 'fixed' && 
                        rect.bottom <= 100 && 
                        rect.right <= 100 &&
                        (style.backgroundColor.includes('blue') || 
                         style.backgroundColor.includes('#007bff') ||
                         style.backgroundColor.includes('#0066cc') ||
                         style.backgroundColor.includes('rgb(0, 123, 255)') ||
                         style.backgroundColor.includes('rgb(0, 102, 204)') ||
                         el.tagName === 'BUTTON' ||
                         el.tagName === 'A' ||
                         el.tagName === 'DIV' ||
                         el.tagName === 'SPAN')) {
                        
                        el.style.display = 'none !important';
                        el.style.visibility = 'hidden !important';
                        el.style.opacity = '0 !important';
                        el.style.pointerEvents = 'none !important';
                        el.style.zIndex = '-9999 !important';
                    }
                });
            }
            
            // Exécution immédiate
            MASK_BLUE_BUTTON();
            
            // Exécution continue
            setInterval(MASK_BLUE_BUTTON, 100);
            
            // Exécution sur scroll
            window.addEventListener('scroll', MASK_BLUE_BUTTON);
            
            // Exécution sur resize
            window.addEventListener('resize', MASK_BLUE_BUTTON);
        })();
    </script>
    
    <section class="py-12 bg-gray-200">
        <div class="max-w-[210mm] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Document PDF -->
            <div class="bg-white shadow-2xl border border-gray-300 document-pdf">
            <!-- En-tête -->
            <div class="mb-12 pb-8 border-b-2 border-gray-200 relative">
                <h1 class="text-3xl font-bold text-[#1b1b18] mb-4 mt-6">
                    MENTIONS LÉGALES
            </h1>
            </div>

            <div class="space-y-12 text-gray-700 leading-relaxed">
                <!-- Section 1 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">1.</span> INFORMATIONS SUR L'ÉDITEUR DU SITE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le site www.dwesta.com est édité par la société :</p>
                        
                        <div class="space-y-3 bg-white p-5 rounded-lg border border-gray-100">
                            <p class="flex items-start"><strong class="min-w-[200px]">Dénomination sociale :</strong> <span>DWESTA SAS</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">Forme juridique :</strong> <span>Société par Actions Simplifiée (SAS)</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">RCCM :</strong> <span>CA/BG/2024B2144</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">Numéro d'Identification Unique (NIU) :</strong> <span>2362024M15634P</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">Adresse du siège social :</strong> <span>Rond-Point Benz-Vi, Bangui, République Centrafricaine</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">Téléphone :</strong> <span>+236 74 01 98 49</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">Adresse email :</strong> <span>contact@dwesta.com</span></p>
                            <p class="flex items-start"><strong class="min-w-[200px]">Capital social :</strong> <span></span></p>
                        </div>
                    </div>
                </article>

                <!-- Section 2 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">2.</span> DIRECTEUR DE LA PUBLICATION
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le directeur de la publication est :</p>
                        <p class="font-semibold text-[#1b1b18]">Davesne Yaya, C.E.Ot de la société</p>
                    </div>
                </article>

                <!-- Section 3 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">3.</span> CONCEPTION ET RÉALISATION DU SITE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le site a été conçu et développé par :</p>
                        <p class="font-semibold text-[#1b1b18]">DWESTA SAS</p>
                    </div>
                </article>

                <!-- Section 4 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">4.</span> HÉBERGEMENT DU SITE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le site est hébergé par :</p>
                        
                        <div class="space-y-3 bg-white p-5 rounded-lg border border-gray-100">
                            <p class="flex items-start"><strong class="min-w-[140px]">Lws</strong></p>
                            <p class="flex items-start"><strong class="min-w-[140px]">Adresse :</strong> <span>10 rue Penthièvre, 75008 Paris (FRANCE)</span></p>
                            <p class="flex items-start"><strong class="min-w-[140px]">Téléphone :</strong> <span>+33 177 62 30 03</span></p>
                            <p class="flex items-start"><strong class="min-w-[140px]">Site web :</strong> <span>https://www.lws.fr</span></p>
                        </div>
                    </div>
                </article>

                <!-- Section 5 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">5.</span> PROPRIÉTÉ INTELLECTUELLE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>L'ensemble des éléments présents sur le site (textes, images, graphismes, logos, vidéos, icônes, logiciels, structure générale, charte graphique, etc.) est la propriété exclusive de DWESTA SAS, sauf mention contraire.</p>
                        
                        <p>Toute reproduction, représentation, modification, publication, transmission ou adaptation, totale ou partielle, de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite sans autorisation écrite préalable de DWESTA SAS.</p>
                </div>
                </article>

                <!-- Section 6 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">6.</span> RESPONSABILITÉ
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>DWESTA SAS s'efforce de fournir des informations exactes et mises à jour. Toutefois, l'entreprise ne peut garantir l'exactitude, la complétude ni la mise à jour en temps réel des informations diffusées sur le site.</p>
                        
                        <p>En conséquence, l'utilisateur reconnaît utiliser ces informations sous sa responsabilité exclusive.</p>
                        
                        <p>DWESTA SAS ne saurait être tenue responsable :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>de toute interruption du site, volontaire ou non,</li>
                            <li>de l'apparition de bogues ou erreurs,</li>
                            <li>de tout dommage résultant d'une intrusion frauduleuse d'un tiers,</li>
                            <li>ou de tout dommage direct ou indirect, matériel ou immatériel, lié à l'utilisation du site.</li>
                        </ul>
                </div>
                </article>

                <!-- Section 7 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">7.</span> DONNÉES PERSONNELLES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les données personnelles collectées via le site (formulaire de contact notamment) font l'objet d'un traitement par DWESTA SAS.</p>
                        
                        <p>Ces traitements sont encadrés par la Politique de confidentialité consultable sur ce site.</p>
                </div>
                </article>

                <!-- Section 8 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">8.</span> COOKIES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le site peut déposer des cookies sur le terminal de l'utilisateur.</p>
                        
                        <p>Les règles applicables en la matière sont précisées dans la Politique de cookies consultable sur ce site.</p>
                </div>
                </article>

                <!-- Section 9 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">9.</span> LOI APPLICABLE ET JURIDICTION COMPÉTENTE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les présentes mentions légales sont régies par le droit centrafricain.</p>
                        
                        <p>En cas de litige, et après tentative de résolution amiable, compétence expresse est attribuée aux juridictions de Bangui, sauf disposition légale contraire.</p>
                    </div>
                </article>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $attributes = $__attributesOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__attributesOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66d7cfd03cd343304d81fe1e21646540)): ?>
<?php $component = $__componentOriginal66d7cfd03cd343304d81fe1e21646540; ?>
<?php unset($__componentOriginal66d7cfd03cd343304d81fe1e21646540); ?>
<?php endif; ?>
<?php /**PATH C:\Users\LANDING DIALLO\Desktop\Projects\dewesta\dewesta\resources\views/legal/mentions-legales.blade.php ENDPATH**/ ?>