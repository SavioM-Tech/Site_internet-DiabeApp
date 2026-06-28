#!/usr/bin/env bash
# ──────────────────────────────────────────────────────────────────────────
# post-deploy.sh — à exécuter SUR le VPS après avoir copié les fichiers
# dans /var/www/diabeapp.
#
#   cd /var/www/diabeapp
#   sudo bash deploy/post-deploy.sh
#
# Idempotent : peut être relancé à chaque mise à jour.
# ──────────────────────────────────────────────────────────────────────────
set -euo pipefail

APP_DIR="/var/www/diabeapp"
WEB_USER="www-data"

cd "$APP_DIR"

echo ">> Dépendances PHP (prod, sans dev)..."
composer install --no-dev --optimize-autoloader --no-interaction

# Si le .env n'a pas encore de clé, en générer une.
if ! grep -q '^APP_KEY=base64:' .env; then
    echo ">> Génération APP_KEY..."
    php artisan key:generate --force
fi

echo ">> Lien symbolique du storage public..."
php artisan storage:link || true

echo ">> Optimisation des caches Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ">> Droits d'écriture www-data sur storage et bootstrap/cache..."
chown -R "$WEB_USER":"$WEB_USER" storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache

echo ">> Terminé. Pense à : sudo systemctl reload php8.5-fpm nginx"
