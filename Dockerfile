FROM   php:8.2-cli
WORKDIR /var/www/html
COPY . .
EXPOSE 10000
CMD ["php", "-S", "0.0.0.0:10000". "-t", "."]
