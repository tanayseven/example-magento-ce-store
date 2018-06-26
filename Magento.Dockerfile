FROM php:7.0.28-apache

ADD . /var/www/html
ADD ./composer /bin/composer

WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        libxslt-dev \
        vim \
        git \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) xsl \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-install -j$(nproc) bcmath \
    && docker-php-ext-install pdo pdo_mysql
RUN chmod a+x /bin/composer \
    && composer install \
    && usermod -a -G www-data root \
    && a2enmod rewrite
