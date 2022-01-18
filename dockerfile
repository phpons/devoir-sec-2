FROM php:7.2-apache
COPY erms /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]