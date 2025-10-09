#!/bin/bash

echo "Starting Dwesta on Koyeb..."

# Create database directory and file
mkdir -p /workspace/database
touch /workspace/database/database.sqlite
chmod 664 /workspace/database/database.sqlite

# Create storage directories
mkdir -p /workspace/storage/framework/{sessions,views,cache}
mkdir -p /workspace/storage/logs
mkdir -p /workspace/bootstrap/cache

# Set permissions
chmod -R 775 /workspace/storage
chmod -R 775 /workspace/bootstrap/cache
chmod -R 775 /workspace/database

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Run migrations
php artisan migrate --force --no-interaction

# Cache config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start server
exec php artisan serve --host=0.0.0.0 --port=${PORT:-8000}

