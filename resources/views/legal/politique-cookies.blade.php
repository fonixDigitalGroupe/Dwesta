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
    
    <script>
        // Script pour masquer le bouton bleu
        document.addEventListener('DOMContentLoaded', function() {
            function hideBlueButton() {
                const buttons = document.querySelectorAll('button, a, div, span');
                buttons.forEach(button => {
                    const style = window.getComputedStyle(button);
                    const rect = button.getBoundingClientRect();
                    
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
                        
                        button.style.display = 'none !important';
                        button.style.visibility = 'hidden !important';
                        button.style.opacity = '0 !important';
                        button.style.pointerEvents = 'none !important';
                    }
                });
            }
            
            // Observer pour détecter les nouveaux éléments
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) {
                            hideBlueButton();
                        }
                    });
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
    </style>
    
    <script>
        // Masquer le bouton bleu (même code que CGU)
        document.addEventListener('DOMContentLoaded', function() {
            // Fonction pour masquer tous les boutons bleus
            function hideBlueButtons() {
                const blueButtons = document.querySelectorAll('button, a, div, span');
                blueButtons.forEach(button => {
                    const style = window.getComputedStyle(button);
                    const bgColor = style.backgroundColor;
                    const color = style.color;
                    
                    // Détecter les boutons bleus par couleur
                    if (bgColor.includes('rgb(59, 130, 246)') || 
                        bgColor.includes('rgb(37, 99, 235)') ||
                        bgColor.includes('rgb(29, 78, 216)') ||
                        color.includes('rgb(59, 130, 246)') ||
                        color.includes('rgb(37, 99, 235)') ||
                        color.includes('rgb(29, 78, 216)') ||
                        button.textContent.includes('Chat') ||
                        button.textContent.includes('Support') ||
                        button.textContent.includes('Aide') ||
                        button.classList.contains('chat-button') ||
                        button.classList.contains('support-button') ||
                        button.id.includes('chat') ||
                        button.id.includes('support')) {
                        button.style.display = 'none !important';
                        button.style.visibility = 'hidden !important';
                        button.style.opacity = '0 !important';
                        button.style.pointerEvents = 'none !important';
                    }
                });
            }
            
            // Masquer immédiatement
            hideBlueButtons();
            
            // Observer les changements dans le DOM
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'childList') {
                        hideBlueButtons();
                        }
                    });
                });
                
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            
            // Masquer périodiquement (sécurité)
            setInterval(hideBlueButtons, 1000);
        });
    </script>
    
    <section class="py-12 bg-gray-200">
        <div class="max-w-[210mm] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Document PDF -->
            <div class="bg-white shadow-2xl border border-gray-300 document-pdf">
            <!-- En-tête -->
            <div class="mb-12 pb-8 border-b-2 border-gray-200 relative">
                <h1 class="text-3xl font-bold text-[#1b1b18] mb-4 mt-6">
                    POLITIQUE DE COOKIES
            </h1>
                </div>

            <div class="space-y-12 text-gray-700 leading-relaxed">
                <!-- Section 1 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">1.</span> QU'EST-CE QU'UN COOKIE ?
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Un cookie est un petit fichier texte enregistré sur le terminal (ordinateur, smartphone, tablette) de l'utilisateur lors de la consultation d'un site internet.</p>
                        
                        <p>Il permet de mémoriser certaines informations (préférences de navigation, langue, statistiques, etc.) afin d'améliorer l'expérience utilisateur.</p>
                    </div>
                </article>

                <!-- Section 2 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">2.</span> TYPES DE COOKIES UTILISÉS SUR LE SITE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le site www.dwesta.com utilise différents types de cookies :</p>
                        
                        <div class="space-y-4 ml-4">
                            <div>
                                <p><strong>Cookies strictement nécessaires (techniques)</strong></p>
                                <p>Indispensables au fonctionnement du site et à la navigation.</p>
                                <p>Exemple : gestion de session, affichage du contenu, sécurisation.</p>
                            </div>
                            
                <div>
                                <p><strong>Cookies de performance et d'analyse (statistiques)</strong></p>
                                <p>Permettent de mesurer l'audience, de comprendre l'utilisation du site et d'améliorer son contenu.</p>
                                <p>Exemple : Google Analytics (adresse IP anonymisée si activé).</p>
                        </div>

                        <div>
                                <p><strong>Cookies de personnalisation (préférences)</strong></p>
                                <p>Mémorisent vos choix (langue, paramètres d'affichage, formulaires).</p>
                        </div>

                        <div>
                                <p><strong>Cookies marketing et publicitaires (si utilisés)</strong></p>
                                <p>Utilisés pour personnaliser la publicité et mesurer son efficacité.</p>
                                <p>Exemple : pixels publicitaires (Facebook, LinkedIn, etc.).</p>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Section 3 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">3.</span> CONSENTEMENT À L'UTILISATION DES COOKIES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Lors de la première visite sur le Site, une bannière d'information s'affiche pour recueillir le consentement de l'utilisateur.</p>
                        
                        <p>L'utilisateur peut accepter, refuser ou personnaliser ses préférences.</p>
                        
                        <p>Le consentement donné est valable pour une durée maximale de 13 mois.</p>
                </div>
                </article>

                <!-- Section 4 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">4.</span> GESTION DES COOKIES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>L'utilisateur peut à tout moment :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Modifier ou retirer son consentement via l'outil de gestion des cookies intégré au Site ;</li>
                            <li>Configurer son navigateur pour bloquer ou supprimer les cookies déjà déposés.</li>
                        </ul>
                        
                        <p class="mt-4"><strong>Exemples de gestion par navigateur :</strong></p>
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Chrome : [Paramètres → Confidentialité et sécurité → Cookies et autres données de site]</li>
                            <li>Firefox : [Options → Vie privée et sécurité → Cookies et données de site]</li>
                            <li>Safari : [Préférences → Confidentialité]</li>
                            <li>Edge : [Paramètres → Cookies et autorisations de site]</li>
                    </ul>
                </div>
                </article>

                <!-- Section 5 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">5.</span> CONSÉQUENCES DU REFUS DE COOKIES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le refus des cookies strictement nécessaires peut empêcher le bon fonctionnement de certaines parties du Site.</p>
                        
                        <p>Le refus des cookies analytiques ou marketing n'affectera pas la navigation, mais pourra limiter certaines fonctionnalités personnalisées.</p>
                    </div>
                </article>

                <!-- Section 6 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">6.</span> RESPONSABLE DU TRAITEMENT
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Pour toute question relative à l'utilisation des cookies, vous pouvez contacter :</p>
                        
                        <p><strong>DWESTA SAS – contact@dwesta.com</strong></p>
                </div>
                </article>
            </div>
            </div>
        </div>
    </section>
</x-main-layout>