FROM php:8.3-cli

WORKDIR /app

COPY src/ src/
COPY data/ data/
COPY public/ public/
COPY config/ config/

RUN chmod -R 777 data/

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "public", "public/index.php"]
