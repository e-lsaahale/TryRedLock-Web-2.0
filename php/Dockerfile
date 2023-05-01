FROM php:8.1-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
RUN chown -R www-data:www-data /var/www/html && chmod -R u=rwX,g=rwX,o=r /var/www/html