FROM php:8.1-fpm-alpine

RUN apk update
RUN apk add --no-cache nginx wget

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /app

WORKDIR /app

COPY . .

RUN apk add --no-cache pcre-dev $PHPIZE_DEPS && pecl install redis && docker-php-ext-enable redis

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN composer install --no-dev
RUN chown -R www-data: /app

# Install dependencies for PHP extensions.
# RUN docker-php-ext-install mbstring pdo pdo_mysql
RUN apk add oniguruma-dev
RUN apk add --no-cache \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev \
        freetype-dev

RUN docker-php-ext-install mbstring pdo pdo_mysql

RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd

RUN php artisan storage:link

CMD sh /app/docker/startup.sh
