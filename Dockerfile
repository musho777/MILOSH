FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nginx \
    supervisor

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/laravel laravel
RUN mkdir -p /home/laravel/.composer && \
    chown -R laravel:laravel /home/laravel

# Set working directory
WORKDIR /var/www

# Copy existing application directory
COPY . /var/www
COPY --chown=laravel:laravel . /var/www

# Install dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Copy nginx configuration
RUN rm /etc/nginx/sites-enabled/default
COPY docker/nginx/nginx.conf /etc/nginx/sites-enabled/default

# Copy supervisor configuration
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Create storage and bootstrap/cache directories if they don't exist
RUN mkdir -p storage/framework/{sessions,views,cache} && \
    mkdir -p storage/logs && \
    mkdir -p bootstrap/cache

# Set permissions
RUN chown -R laravel:www-data /var/www && \
    chmod -R 755 /var/www && \
    chmod -R 775 /var/www/storage && \
    chmod -R 775 /var/www/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]