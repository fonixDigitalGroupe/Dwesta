#!/bin/bash

echo "Starting deployment..."

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate app key if not exists
php artisan key:generate --force

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Build assets
npm install
npm run build

# Start server
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}

