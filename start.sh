#!/bin/bash

# Navigate to the application directory
cd /var/www/html

# Install PHP dependencies
composer install --no-dev

#install vite globally
npm install -g vite

# Install Node.js dependencies (all to run a vite build)
npm install --omit=dev

# Build javascript/css dependencies
npm run build

# Run migrations
php artisan migrate

# generate an application key, if one does not exist
if ! grep -q "APP_KEY=base64:" .env; then
    php artisan key:generate
fi

# Start Apache
apache2-foreground