FROM ubuntu

ENV DEBIAN_FRONTEND noninteractive

ARG NODE_VERSION=20
ARG PHP_VERSION=8.2

COPY . /var/www/laravel

WORKDIR /var/www/laravel

RUN apt-get update \
    && apt-get -y install nginx

RUN apt-get update --fix-missing \
    && apt-get install -y curl \
    && apt-get install -y software-properties-common \
    && rm -rf /var/lib/apt/lists/* \
    && add-apt-repository ppa:ondrej/php \
    && apt install -y nginx php${PHP_VERSION}-fpm php${PHP_VERSION}-mysql php${PHP_VERSION}-curl net-tools telnet php${PHP_VERSION}-gd php-mail php${PHP_VERSION} php${PHP_VERSION}-common php${PHP_VERSION}-sqlite3 php${PHP_VERSION}-curl php${PHP_VERSION}-intl php${PHP_VERSION}-mbstring php${PHP_VERSION}-xmlrpc php${PHP_VERSION}-mysql php${PHP_VERSION}-gd php${PHP_VERSION}-xml php${PHP_VERSION}-cli php${PHP_VERSION}-zip php${PHP_VERSION}-soap unzip \
    && rm -rf /var/lib/apt/lists/* \
    && apt clean

RUN curl -fsSL https://deb.nodesource.com/setup_${NODE_VERSION}.x | bash - && \
    apt-get install -y nodejs \
    && npm install \
    && npm run build

RUN mkdir -p storage/logs \
    && mkdir -p storage/framework/cache/data \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/ framework/testing \
    && mkdir -p storage/framework/views \
    && chmod 777 -R storage

RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer \ 
    && php composer install \
    && php artisan optimize \
    && php artisan view:cache \
    && php artisan event:cache \
    && php artisan route:cache

COPY ./.nginx/nginx.conf /etc/nginx/sites-available/default

RUN echo "\
    #!/bin/sh\n\
    echo \"Starting services...\"\n\
    service php${PHP_VERSION}-fpm start\n\
    nginx -g \"daemon off;\" &\n\
    echo \"Ready.\"\n\
    tail -s 1 /var/log/nginx/*.log -f\n\
    " > /start.sh

EXPOSE 80

CMD ["sh", "/start.sh"]
