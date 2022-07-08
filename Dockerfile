FROM php:7.4-cli
FROM composer:latest

WORKDIR /app

COPY . /app

EXPOSE 8000

RUN composer install

RUN touch database/database.sqlite
RUN php artisan migrate
RUN php artisan db:seed

CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
