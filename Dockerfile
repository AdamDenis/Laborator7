FROM php:8.2-apache

# Instalăm extensia mysqli
RUN docker-php-ext-install mysqli

# Copiem fișierul PHP
COPY index.php /var/www/html/

EXPOSE 80
