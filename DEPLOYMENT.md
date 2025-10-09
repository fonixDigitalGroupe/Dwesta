# Déploiement Dwesta sur Railway.app

## 📋 Prérequis
- Compte GitHub
- Compte Railway.app (gratuit)

## 🚀 Étapes de déploiement

### 1. Créer un compte Railway
1. Aller sur [railway.app](https://railway.app)
2. Cliquer sur "Start a New Project"
3. Se connecter avec GitHub

### 2. Créer un nouveau projet
1. Cliquer sur "New Project"
2. Sélectionner "Deploy from GitHub repo"
3. Choisir le repository `Dwesta`
4. Railway détectera automatiquement Laravel

### 3. Ajouter une base de données MySQL
1. Dans votre projet Railway, cliquer sur "+ New"
2. Sélectionner "Database" → "MySQL"
3. Railway créera automatiquement les variables d'environnement

### 4. Configurer les variables d'environnement
Dans l'onglet "Variables" de votre service, ajouter :

```
APP_NAME=Dwesta Solutions
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:VOTRE_CLE_ICI

# Railway configure automatiquement :
# - MYSQLHOST
# - MYSQLPORT
# - MYSQLDATABASE
# - MYSQLUSER
# - MYSQLPASSWORD

# Email (Gmail)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=fonixdigitalgroupe0@gmail.com
MAIL_PASSWORD=votre_mot_de_passe_app_gmail
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=fonixdigitalgroupe0@gmail.com
MAIL_FROM_NAME=Dwesta Solutions

# Session
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

### 5. Générer APP_KEY
1. Dans Railway, aller dans l'onglet "Settings"
2. Scroller jusqu'à "Deploy Logs"
3. Une fois le premier déploiement terminé, exécuter dans le terminal Railway :
   ```bash
   php artisan key:generate --show
   ```
4. Copier la clé générée et l'ajouter dans les variables d'environnement

### 6. Configurer le domaine
1. Dans "Settings" → "Domains"
2. Cliquer sur "Generate Domain"
3. Railway vous donnera un domaine comme : `dwesta.up.railway.app`

### 7. Premier déploiement
Railway déploiera automatiquement votre application. Le processus :
- Installation des dépendances Composer
- Installation des dépendances NPM
- Build des assets Vite
- Exécution des migrations
- Démarrage du serveur

## 🔧 Configuration Gmail pour les emails

Pour que les formulaires de contact fonctionnent :

1. Activer la validation en 2 étapes sur votre compte Gmail
2. Générer un "Mot de passe d'application" :
   - Aller dans [myaccount.google.com](https://myaccount.google.com)
   - Sécurité → Validation en 2 étapes → Mots de passe des applications
   - Générer un mot de passe pour "Mail"
3. Utiliser ce mot de passe dans `MAIL_PASSWORD`

## 📊 Vérification du déploiement

Une fois déployé, vérifier :
- ✅ Page d'accueil accessible
- ✅ Navigation fonctionnelle
- ✅ Formulaire de contact fonctionne
- ✅ Formulaire de consultation fonctionne
- ✅ Images chargées correctement

## 🐛 Dépannage

### Erreur 500
- Vérifier les logs dans Railway → Deploy Logs
- S'assurer que `APP_KEY` est définie
- Vérifier la connexion à la base de données

### Formulaire ne fonctionne pas
- Vérifier les paramètres `MAIL_*` dans les variables d'environnement
- Tester la connexion SMTP Gmail

### Assets non chargés
- Vérifier que `npm run build` s'est exécuté correctement
- Vérifier `APP_URL` dans les variables d'environnement

## 🔄 Redéploiement automatique

Railway redéploie automatiquement à chaque push sur la branche `main` de GitHub !

## 💰 Coûts

Railway offre :
- **Plan gratuit** : $5 de crédit par mois
- Largement suffisant pour un site vitrine comme Dwesta
- Passer au plan payant ($5/mois) si besoin de plus de ressources

## 📝 Support

Pour toute question : [docs.railway.app](https://docs.railway.app)

