FROM php:8.2-apache

# Dependencies install karein
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql pdo_pgsql pgsql mbstring exif pcntl bcmath gd
RUN a2enmod rewrite

# Apache ka document root change karein aur AllowOverride set karein
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Purani setting hatakar direct apache config me routing fix dena
RUN sed -i '/<Directory ${APACHE_DOCUMENT_ROOT}>/,/<\/Directory>/c\<Directory ${APACHE_DOCUMENT_ROOT}>\n\tOptions Indexes FollowSymLinks\n\tAllowOverride All\n\tRequire all granted\n<\/Directory>' /etc/apache2/apache2.conf

COPY . /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader --ignore-platform-req=ext-pdo_pgsql --ignore-platform-req=ext-pgsql

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
CMD php artisan migrate --force && apache2-foreground

EXPOSE 80