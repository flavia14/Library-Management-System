FROM php:8.3.2-fpm

RUN docker-php-ext-install pdo pdo_mysql
