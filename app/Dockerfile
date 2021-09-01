FROM php:8.0-apache
RUN \
        apt-get update \
        && docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql \
        && docker-php-ext-install mysqli && docker-php-ext-enable mysqli
