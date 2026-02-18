FROM php:8.2-apache

# Instalar extensiones para base de datos
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activar mod_rewrite para las URL amigables
RUN a2enmod rewrite

# Copiar los archivos de la carpeta actual (.) a la carpeta pública del servidor
COPY . /var/www/html/

