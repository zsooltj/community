ARG PHP_VERSION="7.4"
FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

# Install dependencies for GD and install GD with support for jpeg, png webp and freetype
# Info about installing GD in PHP https://www.php.net/manual/en/image.installation.php
RUN apk add --no-cache \
        libwebp-dev \
        libzip-dev \
        freetype-dev

RUN apk add jpeg-dev libpng-dev \
    && docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype \
    && docker-php-ext-install -j$(nproc) gd


RUN docker-php-ext-install mysqli zip
