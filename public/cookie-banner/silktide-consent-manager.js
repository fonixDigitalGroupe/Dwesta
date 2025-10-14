/**
 * Silktide Cookie Consent Manager
 * Gestion du consentement des cookies conforme RGPD
 */

const silktideCookieBannerManager = (function() {
    'use strict';

    let config = {
        background: {
            showBackground: true
        },
        cookieIcon: {
            position: 'bottomLeft'
        },
        cookieTypes: [],
        text: {
            banner: {
                description: 'Ce site utilise des cookies pour améliorer votre expérience.',
                acceptAllButtonText: 'Accepter tout',
                acceptAllButtonAccessibleLabel: 'Accepter tout',
                rejectNonEssentialButtonText: 'Refuser tout',
                rejectNonEssentialButtonAccessibleLabel: 'Refuser tout',
                preferencesButtonText: 'Préférences',
                preferencesButtonAccessibleLabel: 'Préférences'
            },
            preferences: {
                title: 'Gestion des cookies',
                description: 'Gérez vos préférences de cookies.',
                creditLinkText: 'Powered by Silktide',
                creditLinkAccessibleLabel: 'Powered by Silktide'
            }
        },
        position: {
            banner: 'bottomLeft'
        }
    };

    const COOKIE_NAME = 'silktide_cookie_consent';
    const COOKIE_EXPIRY_DAYS = 365;

    /**
     * Mise à jour de la configuration
     */
    function updateCookieBannerConfig(newConfig) {
        config = deepMerge(config, newConfig);
        init();
    }

    /**
     * Fusion profonde des objets
     */
    function deepMerge(target, source) {
        const output = Object.assign({}, target);
        if (isObject(target) && isObject(source)) {
            Object.keys(source).forEach(key => {
                if (isObject(source[key])) {
                    if (!(key in target)) {
                        Object.assign(output, { [key]: source[key] });
                    } else {
                        output[key] = deepMerge(target[key], source[key]);
                    }
                } else {
                    Object.assign(output, { [key]: source[key] });
                }
            });
        }
        return output;
    }

    function isObject(item) {
        return item && typeof item === 'object' && !Array.isArray(item);
    }

    /**
     * Initialisation
     */
    function init() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initBanner);
        } else {
            initBanner();
        }
    }

    /**
     * Initialisation de la bannière
     */
    function initBanner() {
        const consent = getConsent();
        
        console.log('🍪 Cookie Banner - Initialisation');
        console.log('📋 Consentement actuel:', consent);
        
        if (!consent) {
            console.log('⏱️ Délai de 3s avant affichage de la bannière...');
            // Délai de 3 secondes avant d'afficher la bannière
            setTimeout(function() {
                console.log('✅ Affichage de la bannière cookie');
                showBanner();
            }, 3000);
        } else {
            console.log('⚠️ Consentement existant trouvé - Bannière masquée');
            console.log('💡 Pour réafficher: silktideCookieBannerManager.resetConsent()');
            applyConsent(consent);
            showCookieIcon();
        }
    }

    /**
     * Affichage de la bannière
     */
    function showBanner() {
        console.log('🎨 Création de la bannière cookie...');
        
        // Suppression des anciennes instances
        removeBanner();

        // Création du background (optionnel)
        if (config.background.showBackground) {
            const background = document.createElement('div');
            background.className = 'silktide-cookie-background';
            background.id = 'silktide-cookie-background';
            document.body.appendChild(background);
        }

        // Création de la bannière
        const banner = document.createElement('div');
        banner.className = `silktide-cookie-banner position-${config.position.banner}`;
        banner.id = 'silktide-cookie-banner';

        // Bouton de fermeture
        const closeBtn = document.createElement('button');
        closeBtn.className = 'silktide-cookie-banner__close';
        closeBtn.innerHTML = '×';
        closeBtn.setAttribute('aria-label', 'Fermer la bannière');
        closeBtn.setAttribute('title', 'Fermer');
        closeBtn.onclick = rejectNonEssential;
        banner.appendChild(closeBtn);

        // Header simple sans icône
        const header = document.createElement('div');
        header.className = 'silktide-cookie-banner__header';

        // Contenu (titre + description)
        const content = document.createElement('div');
        content.className = 'silktide-cookie-banner__content';

        // Titre
        const title = document.createElement('h2');
        title.className = 'silktide-cookie-banner__title';
        title.textContent = config.text.banner.title || 'Nous respectons votre vie privée.';
        content.appendChild(title);

        // Description
        const description = document.createElement('div');
        description.className = 'silktide-cookie-banner__description';
        description.innerHTML = config.text.banner.description;
        content.appendChild(description);

        header.appendChild(content);
        banner.appendChild(header);

        // Boutons
        const buttons = document.createElement('div');
        buttons.className = 'silktide-cookie-banner__buttons';

        // Bouton Accepter
        const acceptBtn = document.createElement('button');
        acceptBtn.className = 'silktide-cookie-banner__button silktide-cookie-banner__button--accept';
        acceptBtn.textContent = config.text.banner.acceptAllButtonText;
        acceptBtn.setAttribute('aria-label', config.text.banner.acceptAllButtonAccessibleLabel);
        acceptBtn.setAttribute('type', 'button');
        acceptBtn.onclick = acceptAll;
        buttons.appendChild(acceptBtn);

        // Bouton Refuser (optionnel, peut être masqué)
        if (config.text.banner.rejectNonEssentialButtonText && config.showRejectButton !== false) {
            const rejectBtn = document.createElement('button');
            rejectBtn.className = 'silktide-cookie-banner__button silktide-cookie-banner__button--reject';
            rejectBtn.textContent = config.text.banner.rejectNonEssentialButtonText;
            rejectBtn.setAttribute('aria-label', config.text.banner.rejectNonEssentialButtonAccessibleLabel);
            rejectBtn.setAttribute('type', 'button');
            rejectBtn.onclick = rejectNonEssential;
            buttons.appendChild(rejectBtn);
        }

        // Bouton Préférences (optionnel)
        if (config.text.banner.preferencesButtonText && config.showPreferencesButton !== false) {
            const preferencesBtn = document.createElement('button');
            preferencesBtn.className = 'silktide-cookie-banner__button silktide-cookie-banner__button--preferences';
            preferencesBtn.textContent = config.text.banner.preferencesButtonText;
            preferencesBtn.setAttribute('aria-label', config.text.banner.preferencesButtonAccessibleLabel);
            preferencesBtn.setAttribute('type', 'button');
            preferencesBtn.onclick = showPreferences;
            buttons.appendChild(preferencesBtn);
        }

        banner.appendChild(buttons);
        document.body.appendChild(banner);
        
        console.log('✅ Bannière cookie affichée avec succès!');
    }

    /**
     * Suppression de la bannière
     */
    function removeBanner() {
        const banner = document.getElementById('silktide-cookie-banner');
        const background = document.getElementById('silktide-cookie-background');
        if (banner) banner.remove();
        if (background) background.remove();
    }

    /**
     * Accepter tous les cookies
     */
    function acceptAll() {
        const consent = {};
        config.cookieTypes.forEach(type => {
            consent[type.id] = true;
            if (type.onAccept) type.onAccept();
        });
        saveConsent(consent);
        removeBanner();
        showCookieIcon();
    }

    /**
     * Refuser les cookies non essentiels
     */
    function rejectNonEssential() {
        const consent = {};
        config.cookieTypes.forEach(type => {
            if (type.required) {
                consent[type.id] = true;
                if (type.onAccept) type.onAccept();
            } else {
                consent[type.id] = false;
                if (type.onReject) type.onReject();
            }
        });
        saveConsent(consent);
        removeBanner();
        showCookieIcon();
    }

    /**
     * Affichage des préférences
     */
    function showPreferences() {
        removeBanner();
        
        // Création du background
        if (config.background.showBackground) {
            const background = document.createElement('div');
            background.className = 'silktide-cookie-background';
            background.id = 'silktide-cookie-preferences-background';
            background.onclick = closePreferences;
            document.body.appendChild(background);
        }

        // Création de la modal
        const modal = document.createElement('div');
        modal.className = 'silktide-cookie-preferences';
        modal.id = 'silktide-cookie-preferences';
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-modal', 'true');
        modal.setAttribute('aria-labelledby', 'cookie-preferences-title');


        // Header
        const header = document.createElement('div');
        header.className = 'silktide-cookie-preferences__header';

        // Titre et bouton fermer
        const titleRow = document.createElement('div');
        titleRow.className = 'silktide-cookie-preferences__title-row';

        // Titre
        const title = document.createElement('h2');
        title.className = 'silktide-cookie-preferences__title';
        title.id = 'cookie-preferences-title';
        title.textContent = config.text.preferences.title;
        titleRow.appendChild(title);

        // Bouton fermer
        const closeBtn = document.createElement('button');
        closeBtn.className = 'silktide-cookie-preferences__close';
        closeBtn.innerHTML = '×';
        closeBtn.setAttribute('type', 'button');
        closeBtn.setAttribute('aria-label', 'Fermer');
        closeBtn.onclick = closePreferences;
        titleRow.appendChild(closeBtn);

        header.appendChild(titleRow);

        // Description
        const description = document.createElement('div');
        description.className = 'silktide-cookie-preferences__description';
        description.innerHTML = config.text.preferences.description;
        header.appendChild(description);

        modal.appendChild(header);

        // Body (types de cookies)
        const body = document.createElement('div');
        body.className = 'silktide-cookie-preferences__body';

        const currentConsent = getConsent() || {};
        config.cookieTypes.forEach(type => {
            const typeDiv = document.createElement('div');
            typeDiv.className = 'silktide-cookie-type';

            const header = document.createElement('div');
            header.className = 'silktide-cookie-type__header';

            const name = document.createElement('div');
            name.className = 'silktide-cookie-type__name';
            name.textContent = type.name;
            header.appendChild(name);

            // Toggle
            const toggle = document.createElement('div');
            toggle.className = `silktide-cookie-toggle ${type.required ? 'disabled' : ''} ${currentConsent[type.id] !== false ? 'active' : ''}`;
            toggle.dataset.cookieId = type.id;
            toggle.dataset.required = type.required;
            
            const slider = document.createElement('div');
            slider.className = 'silktide-cookie-toggle__slider';
            toggle.appendChild(slider);

            if (!type.required) {
                toggle.onclick = function() {
                    this.classList.toggle('active');
                };
            }

            header.appendChild(toggle);
            typeDiv.appendChild(header);

            const desc = document.createElement('div');
            desc.className = 'silktide-cookie-type__description';
            desc.innerHTML = type.description;
            typeDiv.appendChild(desc);

            body.appendChild(typeDiv);
        });

        modal.appendChild(body);

        // Footer avec boutons
        const footer = document.createElement('div');
        footer.className = 'silktide-cookie-preferences__footer';

        const buttons = document.createElement('div');
        buttons.className = 'silktide-cookie-preferences__buttons';

        // Bouton Enregistrer
        const saveBtn = document.createElement('button');
        saveBtn.className = 'silktide-cookie-banner__button silktide-cookie-banner__button--accept';
        saveBtn.textContent = 'Enregistrer mes choix';
        saveBtn.setAttribute('type', 'button');
        saveBtn.onclick = savePreferences;
        buttons.appendChild(saveBtn);

        footer.appendChild(buttons);
        modal.appendChild(footer);

        document.body.appendChild(modal);
    }

    /**
     * Fermeture des préférences
     */
    function closePreferences() {
        const modal = document.getElementById('silktide-cookie-preferences');
        const background = document.getElementById('silktide-cookie-preferences-background');
        if (modal) modal.remove();
        if (background) background.remove();
        
        // Réafficher la bannière si pas de consentement
        if (!getConsent()) {
            showBanner();
        } else {
            showCookieIcon();
        }
    }

    /**
     * Sauvegarde des préférences
     */
    function savePreferences() {
        const toggles = document.querySelectorAll('.silktide-cookie-toggle');
        const consent = {};

        toggles.forEach(toggle => {
            const cookieId = toggle.dataset.cookieId;
            const isActive = toggle.classList.contains('active');
            consent[cookieId] = isActive;

            const cookieType = config.cookieTypes.find(t => t.id === cookieId);
            if (cookieType) {
                if (isActive && cookieType.onAccept) {
                    cookieType.onAccept();
                } else if (!isActive && cookieType.onReject) {
                    cookieType.onReject();
                }
            }
        });

        saveConsent(consent);
        closePreferences();
        showCookieIcon();
    }

    /**
     * Affichage de l'icône cookie
     */
    function showCookieIcon() {
        // Suppression de l'ancienne icône
        const oldIcon = document.getElementById('silktide-cookie-icon');
        if (oldIcon) oldIcon.remove();

        const icon = document.createElement('div');
        icon.className = `silktide-cookie-icon position-${config.cookieIcon.position}`;
        icon.id = 'silktide-cookie-icon';
        
        // Utiliser l'icône personnalisée si disponible
        if (config.cookieIcon.customIcon) {
            const sizeClass = config.cookieIcon.size === 'small' ? ' size-small' : '';
            icon.innerHTML = `
                <img src="${config.cookieIcon.customIcon}" alt="Gérer les cookies" class="custom-icon${sizeClass}">
            `;
        } else {
            icon.innerHTML = `
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/>
                    <circle cx="8.5" cy="12" r="1.5"/>
                    <circle cx="15" cy="15" r="1.5"/>
                    <circle cx="12" cy="8.5" r="1.5"/>
                </svg>
            `;
        }
        
        icon.onclick = showPreferences;
        icon.setAttribute('role', 'button');
        icon.setAttribute('aria-label', 'Gérer les cookies');
        icon.setAttribute('title', 'Gérer les cookies');
        document.body.appendChild(icon);
    }

    /**
     * Sauvegarde du consentement
     */
    function saveConsent(consent) {
        const data = {
            consent: consent,
            timestamp: Date.now()
        };
        setCookie(COOKIE_NAME, JSON.stringify(data), COOKIE_EXPIRY_DAYS);
    }

    /**
     * Récupération du consentement
     */
    function getConsent() {
        const cookie = getCookie(COOKIE_NAME);
        if (!cookie) return null;
        try {
            const data = JSON.parse(cookie);
            return data.consent;
        } catch (e) {
            return null;
        }
    }

    /**
     * Application du consentement
     */
    function applyConsent(consent) {
        config.cookieTypes.forEach(type => {
            if (consent[type.id]) {
                if (type.onAccept) type.onAccept();
            } else {
                if (type.onReject) type.onReject();
            }
        });
    }

    /**
     * Définir un cookie
     */
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=Lax";
    }

    /**
     * Récupérer un cookie
     */
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    /**
     * Réinitialiser le consentement (pour tests)
     */
    function resetConsent() {
        document.cookie = COOKIE_NAME + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        location.reload();
    }

    // API publique
    return {
        updateCookieBannerConfig: updateCookieBannerConfig,
        resetConsent: resetConsent,
        showPreferences: showPreferences
    };
})();

// Exposer globalement
window.silktideCookieBannerManager = silktideCookieBannerManager;

