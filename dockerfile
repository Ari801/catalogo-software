# Imagen base con PHP y Apache
FROM php:8.2-apache

# Activar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Establecer directorio de trabajo
WORKDIR /var/www/html/

# Copiar tu proyecto al servidor HTML
COPY catalogo_software/ /var/www/html/

# Dar permisos al servidor
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto web
EXPOSE 80
