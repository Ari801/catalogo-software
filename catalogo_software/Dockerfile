# Imagen base con PHP y Apache
FROM php:8.2-apache

# Activar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar tu proyecto al servidor HTML
COPY . /var/www/html/

# Dar permisos al servidor
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto web
EXPOSE 80
