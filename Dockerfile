FROM php:8.2-cli

WORKDIR /app

COPY . /app

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

ENV PORT=10000

EXPOSE 10000

CMD php -S 0.0.0.0:${PORT} -t public public/index.php