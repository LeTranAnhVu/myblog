FROM php:7.3-fpm

RUN apt-get update && apt-get install -y vim \
                      git\
                      libzip-dev \
                      zlib1g-dev \
                      curl
# install zip
RUN docker-php-ext-install mysqli && docker-php-ext-install pdo_mysql && docker-php-ext-install bcmath && docker-php-ext-install zip

#install composer
#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
#    php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
#    php composer-setup.php && \
#    php -r "unlink('composer-setup.php');" && \
#    mv composer.phar /usr/local/bin/composer && \
#    chmod +x /usr/local/bin/composer
WORKDIR /
RUN curl -s https://getcomposer.org/installer | php  && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer
#install laravel
#RUN composer global require laravel/installer

WORKDIR /home/www/mysite
