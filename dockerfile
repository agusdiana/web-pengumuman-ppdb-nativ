FROM php:8.2-apache

# Install ekstensi PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

WORKDIR /var/www/html

# Salin kode ke dalam container
COPY ./src /var/www/html/

EXPOSE 80
