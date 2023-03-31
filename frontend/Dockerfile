FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
COPY . /usr/src/lucas-bor-php-annonce
WORKDIR /usr/src/lucas-bor-php-annonce
CMD [ "php", "./index.php" ]
