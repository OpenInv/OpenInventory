# INSTALLING BASE IMAGE & SETUP

FROM php:7.4.7-apache
WORKDIR /openinventory
COPY . .

RUN mv src /var/www/html
RUN chmod 744 /var/www/html

EXPOSE 80

# Rewrite apache .htaccess
RUN a2enmod rewrite

# PYTHON SETUP

#FROM arm32v7/python:3

# Install Python Libraries

#RUN pip install -r /openinventory/requirements.txt 


# SQLITE DATABASE SETUP

#RUN python /openinventory/setupDatabase.py


LABEL Author: Chase Carlson <GitHub: chasedig>