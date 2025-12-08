# backend/Dockerfile
FROM php:8.2-fpm

# Install the necessary MySQL extensions (fixes Call to undefined function mysqli_connect())
RUN apt-get update && \
    apt-get install -y libzip-dev default-mysql-client && \
    docker-php-ext-install mysqli pdo pdo_mysql && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copy the PHP script into the container's web root
COPY submit.php /var/www/html/
