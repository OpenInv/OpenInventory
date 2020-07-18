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

RUN apt-get update
RUN apt-get install -y python3
RUN apt install -y python3-pip

# Install Python Libraries

RUN pip3 install -r /openinventory/requirements.txt 


# SQLITE DATABASE SETUP

RUN python3 /openinventory/setupDatabase.py


LABEL Author: Chase Carlson <GitHub: chasedig>