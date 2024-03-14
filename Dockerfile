FROM php:8.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql

#update
RUN apt-get update && \
    apt-get remove -y mariadb-server mariadb-client && \
    apt-get install -y \
        libssl-dev \
        default-mysql-client \
        libmcrypt-dev \
        libicu-dev \
        libpq-dev \
        libjpeg62-turbo-dev \
        libjpeg-dev \
        libpng-dev \
        zlib1g-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        unzip \
        libbz2-dev

RUN docker-php-ext-install bcmath bz2 mbstring zip gd

RUN apt-get update && apt-get install -y git wget nano

ENV APACHE_DOCUMENT_ROOT=/var/www

RUN a2enmod rewrite \
    && echo "ServerName docker" >> /etc/apache2/apache2.conf

RUN curl -sS https://getcomposer.org/installer | php && \
 mv composer.phar /usr/local/bin/composer

RUN echo "date.timezone = America/Argentina/Buenos_Aires" >> /usr/local/etc/php/conf.d/timezone.ini;
RUN printf "upload_max_filesize = 20M\npost_max_size = 21M" >> /usr/local/etc/php/conf.d/upload_file_size.ini;

ENV TZ=America/Argentina/Buenos_Aires
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

WORKDIR /var/www/html