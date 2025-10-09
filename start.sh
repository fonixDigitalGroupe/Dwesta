#!/bin/bash

echo "Starting Dwesta deployment..."

# Create storage directories if they don't exist
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache
mkdir -p database

# Set permissions
chmod -R 775 storage bootstrap/cache

# Create SQLite database if it doesn't exist
touch database/database.sqlite

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run migrations
php artisan migrate --force --no-interaction

# Cache config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start server
php artisan serve --host=0.0.0.0 --port=${PORT:-8000}

