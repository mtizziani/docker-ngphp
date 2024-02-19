## License and Copyright
### This file is port of the "ngphp" project, copyright 2024 by Maik Tizziani
### The project is published under let LGPL3 License

FROM php:8.3-fpm

RUN apt-get update
RUN apt-get upgrade -y

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

WORKDIR /var/www