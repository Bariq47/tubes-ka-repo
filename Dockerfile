# Use PHP with Apache as the base image
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    curl \
    && docker-php-ext-install pdo_mysql zip

# Enable Apache mod_rewrite for Laravel
RUN a2enmod rewrite

# Set Apache Document Root to the Laravel public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Copy application code to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Copy package.json and package-lock.json
COPY package*.json ./

# Install Node.js dependencies
RUN npm install

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 for Apache
EXPOSE 80

CMD ["apache2-foreground"]



# FROM php:8.1.0-apache
# WORKDIR /var/www/html

# # Mod Rewrite
# RUN a2enmod rewrite

# # Linux Library
# RUN apt-get update -y && apt-get install -y \
#     libicu-dev \
#     libmariadb-dev \
#     unzip zip \
#     zlib1g-dev \
#     libpng-dev \
#     libjpeg-dev \
#     libfreetype6-dev \
#     libjpeg62-turbo-dev \
#     libpng-dev

# # Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # PHP Extension
# RUN docker-php-ext-install gettext intl pdo_mysql gd

# RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
#     && docker-php-ext-install -j$(nproc) gd


# # Gunakan image PHP
# FROM php:8.1-fpm

# # Install dependencies
# RUN apt-get update && apt-get install -y \
#     git \
#     curl \
#     libpng-dev \
#     libonig-dev \
#     libxml2-dev \
#     zip \
#     unzip

# RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# WORKDIR /var/www/html

# COPY . .

# RUN chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache
