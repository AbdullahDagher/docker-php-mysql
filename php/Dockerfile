FROM php:8.2.8-apache

RUN apt-get update && apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite

COPY . /var/www/html
