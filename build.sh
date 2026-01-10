#!/bin/bash

# Vercel Build Script for Laravel

echo "🔧 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

echo "📦 Building assets..."
npm ci
npm run build

echo "🔑 Generating APP_KEY if not exists..."
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

echo "🗂️ Creating necessary directories..."
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
mkdir -p bootstrap/cache

echo "🔐 Setting permissions..."
chmod -R 755 storage bootstrap/cache

echo "💾 Creating SQLite database..."
touch /tmp/database.sqlite
chmod 666 /tmp/database.sqlite

echo "🗄️ Running migrations..."
php artisan migrate --force --no-interaction

echo "🌱 Seeding database..."
php artisan db:seed --force --no-interaction

echo "🎯 Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Build complete!"
