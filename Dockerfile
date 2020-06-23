FROM php:7.4.7-apache

WORKDIR /

COPY src/ /var/www/html
EXPOSE 80

LABEL Author: Chase Carlson <GitHub: @chasedig>


