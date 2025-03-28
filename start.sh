#!/bin/bash

# Navigate to the application directory
cd /var/www/html

# Install PHP dependencies
composer install --no-dev

# Install Node.js dependencies (all to run a vite)
npm install

# Build javascript/css dependencies
npm run build

# Run migrations
php artisan migrate

# generate an application key, if one does not exist
if ! grep -q "APP_KEY=base64:" .env; then
    php artisan key:generate
fi

# run optimization script
php artisan optimize

# Start Apache
apache2-foreground