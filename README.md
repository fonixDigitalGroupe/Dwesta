# 🚀 Dwesta - Site Web Officiel

Site web vitrine de **DWESTA SAS**, entreprise de transformation numérique et cybersécurité basée en Afrique.

---

## 📋 À Propos

**Dwesta** accompagne les entreprises et institutions dans :
- 🛡️ La sécurisation de leurs systèmes (Cybersécurité)
- 🔧 L'optimisation de leurs infrastructures IT
- 🌐 La transformation de leurs environnements IoT/OT
- 💻 Le développement d'applications web et mobile
- 📊 Le conseil et l'accompagnement digital

**Partenaire officiel exclusif Fortinet** en République Centrafricaine.

---

## 🛠️ Technologies

- **Framework :** Laravel 12.x
- **Frontend :** Tailwind CSS + Vite
- **Base de données :** SQLite (développement)
- **Mail :** Système de contact intégré

---

## 📦 Installation

### Prérequis

- PHP 8.2+
- Composer
- Node.js 18+ & npm

### Étapes

1. **Cloner le projet**
   ```bash
   git clone https://github.com/votre-repo/dewesta.git
   cd dewesta
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   npm install
   ```

3. **Configuration**
   
   Créer le fichier `.env` :
   ```bash
   cp .env.example .env
   ```
   
   Générer la clé d'application :
   ```bash
   php artisan key:generate
   ```

4. **Base de données**
   ```bash
   php artisan migrate
   ```

5. **Compiler les assets**
   ```bash
   npm run dev
   ```

6. **Lancer le serveur**
   ```bash
   php artisan serve
   ```

Le site sera accessible sur **http://localhost:8000**

---

## 📂 Structure du Projet

```
dewesta/
├── app/                # Code PHP (Controllers, Models, Mail)
├── config/             # Configuration Laravel
├── database/           # Migrations, seeders
├── public/             # Fichiers publics (images, assets)
├── resources/
│   ├── css/           # Styles (Tailwind)
│   ├── js/            # JavaScript
│   └── views/         # Templates Blade
├── routes/            # Définition des routes
└── storage/           # Fichiers générés (logs, cache)
```

---

## 🎨 Pages Disponibles

- **`/`** - Page d'accueil
- **`/cybersecurite`** - Service Cybersécurité
- **`/iot-ot`** - Service IoT & OT
- **`/solution-informatique`** - Infrastructure IT
- **`/conseils`** - Conseils & Régie
- **`/developpement-applicatif`** - Développement Web/Mobile

---

## 📧 Configuration Email

Pour activer le formulaire de contact, configurez le mail dans `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="contact@dwesta.com"
MAIL_FROM_NAME="Dwesta"
```

---

## 🚀 Production

### Build des assets
```bash
npm run build
```

### Optimisation
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 📞 Contact

**DWESTA SAS**
- 📧 Email : contact@dwesta.com
- 📱 Téléphone : +236 74 01 98 49
- 📍 Adresse : Rond-Point Benz-Vi, Bangui, RCA
- 🔗 LinkedIn : [linkedin.com/company/dwesta](https://www.linkedin.com/company/dwesta/)
- 👥 Facebook : [facebook.com/dwesta](https://www.facebook.com/share/1APrXSjqHi/)

---

## 📄 Informations Légales

- **NIU :** 2362024M15634P
- **RCCM :** CA/BG/2024B2144
- **Forme juridique :** SAS (Société par Actions Simplifiée)

---

## 🤝 Contributeurs

- **Davesne Yaya** - CEO
- **Abdoulaye Nayelwa** - COO
- **Pamela Denis** - CSO

---

## 📜 Licence

© 2025 DWESTA SAS. Tous droits réservés.

---

**Développé avec ❤️ en Afrique**

