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
                    POLITIQUE DE CONFIDENTIALITÉ
            </h1>
            </div>

            <div class="space-y-12 text-gray-700 leading-relaxed">
                <!-- Section 1 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">1.</span> OBJET DE LA POLITIQUE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>La présente politique de confidentialité a pour but d'informer les utilisateurs du site www.dwesta.com sur la manière dont DWESTA SAS collecte, traite et protège leurs données personnelles, conformément aux lois en vigueur en République Centrafricaine et aux standards internationaux (RGPD – Règlement Général sur la Protection des Données).</p>
                    </div>
                </article>

                <!-- Section 2 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">2.</span> RESPONSABLE DU TRAITEMENT
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p><strong>DWESTA SAS</strong></p>
                        <p>Forme juridique : Société par Actions Simplifiée</p>
                        <p>Siège social : Rond-Point Benz-Vi, Bangui, République Centrafricaine</p>
                        <p>RCCM : CA/BG/2024B2144</p>
                        <p>NIU : 2362024M15634P</p>
                        <p>Email : contact@dwesta.com</p>
                        <p>Téléphone : +236 74 01 98 49</p>
                </div>
                </article>

                <!-- Section 3 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">3.</span> DONNÉES PERSONNELLES COLLECTÉES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les données collectées sur le Site sont les suivantes :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Informations transmises via les formulaires (nom, prénom, adresse email, numéro de téléphone, société, message) ;</li>
                            <li>Données techniques : adresse IP, type de navigateur, pages visitées, durée de navigation ;</li>
                            <li>Données issues des cookies et traceurs (voir Politique de cookies).</li>
                    </ul>
                </div>
                </article>

                <!-- Section 4 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">4.</span> FINALITÉS DU TRAITEMENT
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les données collectées par DWESTA SAS ont pour finalités :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Répondre aux demandes de contact, d'information ou de devis ;</li>
                            <li>Assurer le suivi client et commercial ;</li>
                            <li>Améliorer le fonctionnement et la sécurité du Site ;</li>
                            <li>Réaliser des analyses statistiques anonymisées ;</li>
                            <li>Respecter les obligations légales et réglementaires.</li>
                    </ul>
                </div>
                </article>

                <!-- Section 5 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">5.</span> BASE LÉGALE DU TRAITEMENT
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les traitements de données reposent sur :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Le consentement de l'utilisateur (case à cocher dans les formulaires) ;</li>
                            <li>L'intérêt légitime de DWESTA SAS à assurer la communication et la gestion de sa clientèle ;</li>
                            <li>Le respect d'obligations légales (comptabilité, sécurité).</li>
                    </ul>
                </div>
                </article>

                <!-- Section 6 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">6.</span> DURÉE DE CONSERVATION
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les données sont conservées :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>3 ans après le dernier contact avec l'utilisateur (prospection, échanges commerciaux) ;</li>
                            <li>5 ans pour les données nécessaires au respect d'obligations légales ;</li>
                            <li>13 mois maximum pour les cookies.</li>
                        </ul>
                </div>
                </article>

                <!-- Section 7 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">7.</span> DESTINATAIRES DES DONNÉES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Les données personnelles sont destinées uniquement à DWESTA SAS et à ses prestataires techniques (hébergement, maintenance, outils de suivi).</p>
                        
                        <p>Elles ne sont jamais revendues ni transmises à des tiers sans consentement préalable, sauf obligation légale.</p>
                    </div>
                </article>

                <!-- Section 8 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">8.</span> DROITS DES UTILISATEURS
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Conformément au RGPD et aux lois applicables, les utilisateurs disposent des droits suivants :</p>
                        
                        <ul class="list-disc list-inside space-y-2 ml-4">
                            <li>Droit d'accès à leurs données ;</li>
                            <li>Droit de rectification des données inexactes ou incomplètes ;</li>
                            <li>Droit à l'effacement (« droit à l'oubli ») ;</li>
                            <li>Droit à la limitation du traitement ;</li>
                            <li>Droit d'opposition au traitement ;</li>
                            <li>Droit à la portabilité des données.</li>
                    </ul>
                        
                        <p class="mt-4">Pour exercer ces droits, l'utilisateur peut contacter : contact@dwesta.com</p>
                    </div>
                </article>

                <!-- Section 9 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">9.</span> SÉCURITÉ DES DONNÉES
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>DWESTA SAS met en œuvre toutes les mesures techniques et organisationnelles nécessaires pour protéger les données personnelles contre la perte, l'accès non autorisé, la divulgation ou la modification (chiffrement, pare-feu, contrôle d'accès, sauvegardes régulières).</p>
                </div>
                </article>

                <!-- Section 10 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">10.</span> TRANSFERT DE DONNÉES HORS UNION EUROPÉENNE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Dans le cas où des données seraient traitées en dehors de l'Union Européenne (par exemple via un prestataire de services cloud), DWESTA SAS s'assure que des garanties adéquates sont mises en place (clauses contractuelles types, prestataires certifiés).</p>
                </div>
                </article>

                <!-- Section 11 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">11.</span> COOKIES ET TRACEURS
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Le Site utilise des cookies pour améliorer l'expérience utilisateur et analyser l'audience.</p>
                        
                        <p>Les modalités d'utilisation et de gestion sont détaillées dans la Politique de cookies.</p>
                </div>
                </article>

                <!-- Section 12 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">12.</span> RÉCLAMATIONS
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>Si l'utilisateur estime que DWESTA SAS ne respecte pas ses droits, il peut introduire une réclamation auprès de l'autorité compétente en matière de protection des données de son pays de résidence.</p>
                </div>
                </article>

                <!-- Section 13 -->
                <article class="article-section">
                    <h2 class="text-xl font-bold text-[#1b1b18] mb-6">
                        <span class="article-number">13.</span> MODIFICATION DE LA POLITIQUE
                    </h2>
                    
                    <div class="space-y-4 text-[15px]">
                        <p>DWESTA SAS se réserve le droit de modifier la présente politique de confidentialité à tout moment.</p>
                        
                        <p>La version applicable est celle publiée sur le Site à la date de consultation par l'utilisateur.</p>
                </div>
                </article>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>