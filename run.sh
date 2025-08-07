#!/bin/bash

# Verify if PHP is installed
if ! command -v php &> /dev/null
then
    echo "PHP could not be found. Please install PHP 8.1 or higher."
    exit 1
fi

# Verify if Composer is installed
if ! command -v composer &> /dev/null
then
    echo "Composer could not be found. Please install Composer."
    exit 1
fi

# Check if vendor directory exists, if not run composer install
if [ ! -d "vendor" ]; then
    echo "Installing dependencies with Composer..."
    composer install
    
    if [ $? -ne 0 ]; then
        echo "Failed to install dependencies. Please check your Composer setup."
        exit 1
    fi
fi

# Check if .env file exists, if not create it from .env.example
if [ ! -f ".env" ]; then
    echo "Creating .env file..."
    cp .env.example .env
    
    # Generate application key
    php artisan key:generate
fi

# Start the development server
echo "Starting Laravel development server..."
php artisan serve