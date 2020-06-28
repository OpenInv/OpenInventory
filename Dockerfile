# OS SETUP

FROM ubuntu

# PHP/APACHE SETUP

RUN apt-get install php7.4

WORKDIR /

COPY src/ /var/www/html
EXPOSE 80

RUN a2enmod rewrite

# PYTHON SETUP

RUN apt-get update

RUN apt-get install python

# Install Python Libraries
RUN pip install -r requirements.txt 


# SQLITE DATABASE SETUP




LABEL Author: Chase Carlson <GitHub: @chasedig>