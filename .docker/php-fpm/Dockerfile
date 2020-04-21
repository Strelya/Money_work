FROM php:7.4.3-fpm

COPY . /src/

WORKDIR /src/

RUN apt update

RUN apt-get install -qq git curl

RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get clean

RUN chown -R www-data:www-data /src

RUN usermod -u 1000 www-data && \
    groupmod -g 1000 www-data
