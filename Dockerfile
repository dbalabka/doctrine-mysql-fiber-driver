FROM php:8.0-rc-cli

WORKDIR /app
COPY ./install.sh /app/

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN sh install.sh

