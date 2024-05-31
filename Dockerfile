FROM php:7.4-apache

# Instalar extensões do PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar arquivos de configuração
COPY ./app /var/www/html

# Dar permissões ao Apache
RUN chown -R www-data:www-data /var/www/html
