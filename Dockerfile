FROM php:7.4.7-apache

WORKDIR /

#COPY requirements.txt /var/www

# FROM ubuntu


# PHP/APACHE SETUP

#RUN apt-get install php7.4


COPY src/ /var/www/html
EXPOSE 80

RUN a2enmod rewrite

# PYTHON SETUP

#RUN apt-get update && apt-get install -y python3 python3-pip

# Install Python Libraries
#RUN pip install -r /var/www/requirements.txt 


# SQLITE DATABASE SETUP

# RUN python setupDatabase.py


LABEL Author: Chase Carlson <GitHub: @chasedig>