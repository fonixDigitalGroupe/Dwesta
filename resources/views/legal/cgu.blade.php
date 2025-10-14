<x-main-layout>
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
                    CONDITIONS GÉNÉRALES D'UTILISATION
                </h1>
            </div>

            <div class="space-y-12 text-gray-700 leading-relaxed">
                <!-- Section 1 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">1.</span> OBJET
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les présentes Conditions Générales d'Utilisation (CGU) ont pour objet de définir les modalités d'accès et d'utilisation du site internet www.dwesta.com (ci-après « le Site »).</p>
                        
                        <p>En accédant au Site, l'utilisateur reconnaît avoir pris connaissance des présentes CGU et s'engage à les respecter.</p>
                    </div>
                </article>

                <!-- Section 2 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">2.</span> ACCÈS AU SITE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le Site est accessible gratuitement à tout utilisateur disposant d'une connexion internet.</p>
                        
                        <p>Les frais liés à l'accès (connexion internet, matériel, logiciels) sont à la charge exclusive de l'utilisateur.</p>
                        
                        <p>DWESTA SAS se réserve le droit de suspendre, limiter ou interrompre l'accès au Site, sans préavis, pour des raisons de maintenance, de sécurité ou tout autre motif légitime.</p>
                    </div>
                </article>

                <!-- Section 3 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">3.</span> SERVICES PROPOSÉS
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le Site a pour objet de présenter les activités, services et expertises de DWESTA SAS dans les domaines de la cybersécurité, de l'infrastructure, du développement, du conseil et des solutions technologiques.</p>
                        
                        <p>Le Site est de nature informative et ne constitue pas une offre contractuelle. Toute demande de prestation ou de devis doit faire l'objet d'un contact direct avec DWESTA SAS.</p>
                    </div>
                </article>

                <!-- Section 4 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">4.</span> OBLIGATIONS DE L'UTILISATEUR
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>En utilisant le Site, l'utilisateur s'engage à :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Ne pas perturber le fonctionnement normal du Site (intrusion, envoi massif de données, piratage, etc.) ;</li>
                            <li>Fournir des informations exactes et à jour lorsqu'il utilise le formulaire de contact ;</li>
                            <li>Ne pas utiliser le Site ou son contenu à des fins illégales, diffamatoires, nuisibles ou contraires à l'ordre public.</li>
                            </ul>
                    </div>
                </article>

                <!-- Section 5 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">5.</span> PROPRIÉTÉ INTELLECTUELLE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>L'ensemble des contenus du Site (textes, images, vidéos, graphismes, logos, icônes, logiciels, charte graphique, architecture) est protégé par les lois en vigueur relatives à la propriété intellectuelle et appartient à DWESTA SAS, sauf mention contraire.</p>
                        
                        <p>Toute reproduction, représentation, modification, distribution ou exploitation non autorisée du contenu est interdite et peut engager la responsabilité de son auteur.</p>
                    </div>
                </article>

                <!-- Section 6 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">6.</span> DONNÉES PERSONNELLES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les données personnelles collectées via le Site (formulaire de contact) sont traitées conformément à la Politique de confidentialité disponible sur le Site.</p>
                        
                        <p>L'utilisateur dispose de droits (accès, rectification, suppression, opposition, portabilité) qu'il peut exercer en écrivant à : contact@dwesta.com.</p>
                    </div>
                </article>

                <!-- Section 7 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">7.</span> COOKIES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le Site utilise des cookies pour améliorer l'expérience utilisateur et mesurer l'audience.</p>
                        
                        <p>La gestion des cookies est détaillée dans la Politique de cookies.</p>
                    </div>
                </article>

                <!-- Section 8 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">8.</span> RESPONSABILITÉ
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>DWESTA SAS s'efforce d'assurer le bon fonctionnement et la sécurité du Site, mais :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Ne peut garantir l'absence totale d'erreurs, de virus ou d'intrusions extérieures ;</li>
                            <li>Ne saurait être tenue responsable des dommages directs ou indirects subis par l'utilisateur liés à l'utilisation ou l'impossibilité d'utiliser le Site ;</li>
                            <li>Décline toute responsabilité quant au contenu des sites tiers accessibles via des liens hypertextes depuis le Site.</li>
                            </ul>
                    </div>
                </article>

                <!-- Section 9 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">9.</span> LIENS HYPERTEXTES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le Site peut contenir des liens vers d'autres sites internet.</p>
                        
                        <p>DWESTA SAS ne contrôle pas ces sites et ne peut être tenue responsable de leur contenu, de leur sécurité ni de leur conformité légale.</p>
                    </div>
                </article>

                <!-- Section 10 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">10.</span> MODIFICATION DES CGU
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>DWESTA SAS se réserve le droit de modifier et de mettre à jour les présentes CGU à tout moment, sans préavis.</p>
                        
                        <p>La version applicable est celle publiée sur le Site à la date de consultation par l'utilisateur.</p>
                    </div>
                </article>

                <!-- Section 11 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">11.</span> LOI APPLICABLE ET JURIDICTION COMPÉTENTE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les présentes CGU sont régies par le droit centrafricain.</p>
                        
                        <p>Tout litige relatif à l'utilisation du Site sera soumis aux juridictions compétentes de Bangui, après tentative de résolution amiable.</p>
                    </div>
                </article>
            </div>
            </div>
        </div>
    </section>
</x-main-layout>

