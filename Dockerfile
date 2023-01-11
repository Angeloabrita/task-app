FROM php:8.1.0-fpm

# Install npm
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Arguments defined in docker-compose.yml
ARG user
ARG uid

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

# Add application
COPY . /var/www/

# Run composer install
RUN composer install --no-dev --optimize-autoloader

# Install npm dependencies
RUN npm install

# Install Tailwind CSS extension for Laravel Mix
RUN npm install -D tailwindcss
RUN npm i daisyui

# Run artisan commands
RUN php artisan key:generate
RUN php artisan config:cache

USER $user
