FROM php:8.3-fpm

ARG UID
EXPOSE $UID

RUN adduser -u 1000 --disabled-password --gecos "" appuser

COPY ./php_config/php.ini.docker_install $PHP_INI_DIR/php.ini

RUN apt-get update\
    && apt-get install -y libpng-dev zlib1g-dev libzip-dev libxml2-dev libicu-dev g++ wget git rsync

RUN docker-php-ext-install intl pdo pdo_mysql soap opcache gd bcmath zip 

#sockets
RUN apt-get install -y zip


RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer
RUN composer self-update

#linters
RUN wget https://cs.symfony.com/download/php-cs-fixer-v2.phar -O php-cs-fixer
RUN chmod a+x php-cs-fixer
RUN mv php-cs-fixer /usr/local/bin/php-cs-fixer

RUN apt-get -o Acquire::Check-Valid-Until=false update && apt-get install -y gnupg2

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get -o Acquire::Check-Valid-Until=false update && apt-get install -y yarn


RUN  apt-get -o Acquire::Check-Valid-Until=false update && apt-get install -y nodejs npm
RUN node --version
RUN npm --version
RUN npm install n -g
RUN n 16.0.0

COPY ./xdebug.ini $PHP_INI_DIR/conf.d/
RUN if [ "${http_proxy}" != "" ]; then \
    # Needed for pecl to succeed
    pear config-set http_proxy ${http_proxy} \
    ;fi
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
## Prevent error in nginx error.log
RUN touch /var/log/xdebug_remote.log
RUN chmod 777 /var/log/xdebug_remote.log

#sf ejecuta bin/console.
RUN echo "alias sf=/appdata/www/bin/console" >> /home/appuser/.bashrc

#Instalacion de Symfony/CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash && export PATH="$HOME/.symfony/bin:$PATH"
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

RUN git config --global user.email "renerecalde2@gmail.com"
RUN git config --global user.name "renerecalde"



RUN mkdir -p /appdata/www

#optmiza dependecias de composer
USER appuser
