#!/bin/bash

# Navigate to the application directory
cd /var/www/html

# Install PHP dependencies
composer install --no-dev

# Install Node.js dependencies
npm install --production

# Build javascript/css dependencies
npm run build

# Run migrations
php artisan migrate

# Start Apache
apache2-foreground