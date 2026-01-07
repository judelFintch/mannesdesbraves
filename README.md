# Laravel scaffold (minimal)

Pré-requis:
- PHP 8.4 et extensions (`pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `fileinfo`).
- Composer installé.

Quick start (dans le dossier `laravel`):

```bash
# Créer le projet Laravel (installe les dépendances)
composer create-project laravel/laravel . --prefer-dist

# Installer les dépendances JS
npm install

# Lancer le dev (Vite)
npm run dev

# Démarrer le serveur local
php artisan serve
```

Notes:
- Ce dossier contient un scaffold minimal (routes, vues Blade, config Vite/package.json) pour démarrer la migration. Après `composer create-project` vous pouvez remplacer `resources/views/welcome.blade.php` par les templates convertis depuis le frontend existant.
- PHP 8.4 est compatible — vérifie les extensions requises ci-dessus.

Prochaine étape recommandée: tester localement puis convertir `index.html` en `resources/views` et déplacer les assets dans `resources`/`public` selon besoin.

Étapes recommandées automatisées:

1. Après avoir installé Laravel et les dépendances, exécuter le script de copie d'assets depuis la racine du workspace vers `laravel/public`:

```bash
chmod +x laravel/setup_assets.sh
./laravel/setup_assets.sh
```

2. Installer les dépendances JS spécifiques au dossier `laravel` et lancer les scripts Tailwind :

```bash
cd laravel
npm install
# build once
npm run build:css
# ou en dev avec watch
npm run dev:css
```

3. Configurer le `.env` pour l'envoi d'e-mails (utilisé par le formulaire de contact) :

- Exemple minimal pour Mailtrap (ou remplace par tes identifiants SMTP) :

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_user
MAIL_PASSWORD=your_mailtrap_pass
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=webmaster@example.com
MAIL_FROM_NAME="La Manne des Braves"
# Optionnel : entité destinataire pour les messages reçus
MAIL_TO=contact@tondomaine.tld
```

Le formulaire de contact utilisera `MAIL_TO` si défini, sinon `MAIL_FROM_ADDRESS`.

4. Convertir progressivement `index.html` en vues Blade. Un point de départ minimal est `resources/views/welcome.blade.php`.

---

## Intégration continue (CI) ✅

Un workflow GitHub Actions a été ajouté pour :

- Installer les dépendances PHP et JS
- Exécuter `npm run build:css` pour compiler Tailwind
- Préparer un environnement de tests SQLite
- Exécuter `php artisan migrate` et lancer la suite de tests (`php artisan test`)

Le fichier du workflow est : `.github/workflows/ci.yml`. Le workflow se déclenche sur `push` et `pull_request` vers la branche `main`. Il est recommandé de vérifier que la branche principale utilisée par le dépôt est `main` ou d'ajuster la configuration si nécessaire.
