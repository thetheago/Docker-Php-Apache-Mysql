FROM php:8.0-apache
LABEL org.opencontainers.image.authors="github.com/thetheago"

# RUN apt-get update && apt-get install -y gnupg2
# RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys 4F4EA0AAE5267A6C
# # Repositorios para o Ubuntu 20.04
# RUN apt update \
#     && apt install lsb-release ca-certificates apt-transport-https software-properties-common -y \
#     && add-apt-repository ppa:ondrej/php

# # Extensao PDO para o banco de dados
# RUN apt-get update && apt-get install php8.0-mysql
# RUN service apache2 restart
# RUN apt-get install php-mysqlnd
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html