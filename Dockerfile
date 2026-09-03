FROM php:8.2-cli

WORKDIR /app
COPY . /app

ENV PORT=10000
EXPOSE 10000

CMD php -S 0.0.0.0:${PORT} -t public public/index.php