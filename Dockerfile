# Use official PHP with Apache
FROM php:8.2-apache

# Copy all project files to Apache web root
COPY . /var/www/html/

# Install PHP extensions (optional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache rewrite module (for Laravel, WordPress, or clean URLs)
RUN a2enmod rewrite

# Expose port 80 (Render uses this)
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
