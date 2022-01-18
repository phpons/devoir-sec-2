FROM php:7.3-apache

COPY erms /var/www/html/

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]