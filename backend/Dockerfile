FROM mysql:8.0.32

MAINTAINER me

ENV MYSQL_DATABASE=<projet_bon_coin> \
    MYSQL_ROOT_PASSWORD=<1234>

ADD projet_bon_coin.sql /docker-entrypoint-initdb.d

EXPOSE 3306