FROM php:8-apache
ADD ./html /var/www/html
VOLUME /var/www/html
EXPOSE 80