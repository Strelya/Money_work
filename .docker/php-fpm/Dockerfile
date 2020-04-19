FROM php:7.4.3-fpm

COPY . /src/

WORKDIR /src/

RUN chown -R www-data:www-data /src

RUN usermod -u 1000 www-data && \
    groupmod -g 1000 www-data
